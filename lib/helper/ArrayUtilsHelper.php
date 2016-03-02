<?php
// $Source$
// $Id$


/*
(C) UK 2006 Richard Quadling

This work is licensed under the Creative Commons Attribution 2.5 License.
To view a copy of this license, visit http://creativecommons.org/licenses/by/2.5/ or send a letter to
    Creative Commons,
    543 Howard Street,
    5th Floor,
    San Francisco,
    California,
    94105, USA.


Version History

2007/03/30
NO actual change, but to make this function PHP4 compatibility you will need to remove the type hints in the function definitions.
e.g.
function array_multisort_column(&$a_data, $m_mixed1)
and
function array_multisort_column_cmp(&$a_left, &$a_right)

Ideally, you should add some type checking to emulate the type hints.
if (is_array($a_data)) 
and
if (is_array($a_left) && in_array($a_right)

sort of thing.

2006/09/20
Removed reliance on PHP's constants as using column numbers conflicted with these constants.
Use AMC_SORT_xxx rather than SORT_xxx.

2006/08/23
Added CC license
Added notice and error for parameters

2006/08/22
Fixed local defines to be well out of the way of the ones used by PHP.

2006/08/07
Created this code based upon work done by KES (http://www.php.net/manual/en/function.array-multisort.php#68452)
*/

// AMC defines for keeping association.
define ('AMC_LOSE_ASSOCIATION', 'AMC10001');
define ('AMC_KEEP_ASSOCIATION', 'AMC10002');

// AMC defines for the global array.
define ('AMC_SORT_ORDER', 'AMC10003');
define ('AMC_SORT_TYPE', 'AMC10004');

// AMC defines for the sort order.
define ('AMC_SORT_ASC', 'AMC10005');
define ('AMC_SORT_DESC', 'AMC10006');

// AMC defines for sorting type.
define ('AMC_SORT_REGULAR', 'AMC10007');
define ('AMC_SORT_NUMERIC', 'AMC10008');
define ('AMC_SORT_STRING', 'AMC10009');
define ('AMC_SORT_STRING_CASELESS', 'AMC10010');

/**
  * bool array_multisort_column ( array ar1 [, mixed arg [, mixed ... [, array ...]]] )
  **/
function array_multisort_column(array &$a_data, $m_mixed1)
    {

        if (!is_array($a_data) || sizeof($a_data) < 1) return false;

    // Get the parameters and the number of parameters.
    $a_Args = func_get_args();
    $i_Args = func_num_args();

    // Define a global empty array for the comparison function.
    $GLOBALS['a_AMC_ordering'] = array();

    // Get the list of columns.
    $a_Columns = array_keys(reset($a_data));

    // Assume association is NOT kept
    $b_KeepAssociation = False;

    // Process the parameter list, extracting columns and any applicable settings.
    for($i_Arg = 1 ; $i_Arg < $i_Args ; )
        {
        // Initially we only want to look at columns.
        if (in_array($a_Args[$i_Arg], $a_Columns))
            {
            // Track the column.
            $s_Column = $a_Args[$i_Arg];

            // Add the column with default settings to the global array.
            $GLOBALS['a_AMC_ordering'][$a_Args[$i_Arg]] = array
                (
                AMC_SORT_ORDER => AMC_SORT_ASC,
                AMC_SORT_TYPE => AMC_SORT_REGULAR,
                );

            // While there are more parameters to process is the next one a controller rather than a column.
            while
                (

                // There IS a next parameter.
                isset($a_Args[$i_Arg + 1]) && 

                // It is a controller.
                in_array
                    (
                    $a_Args[$i_Arg + 1], 
                    array
                        (
                        AMC_KEEP_ASSOCIATION,
                        AMC_LOSE_ASSOCIATION,
                        AMC_SORT_STRING_CASELESS,
                        AMC_SORT_ASC,
                        AMC_SORT_DESC,
                        AMC_SORT_NUMERIC,
                        AMC_SORT_REGULAR,
                        AMC_SORT_STRING,
                        ), 
                    True
                    )

                )
                {
                // Deal with column sorting order.
                if (
                    in_array
                        (
                        $a_Args[$i_Arg + 1], 
                        array
                            (
                            AMC_SORT_ASC, 
                            AMC_SORT_DESC
                            ), 
                        True
                        )
                    )
                    {
                    $GLOBALS['a_AMC_ordering'][$s_Column][AMC_SORT_ORDER] = $a_Args[$i_Arg + 1];
                    }
                // Deal with column sorting type.
                elseif (
                    in_array
                        (
                        $a_Args[$i_Arg + 1], 
                        array
                            (
                            AMC_SORT_REGULAR, 
                            AMC_SORT_NUMERIC, 
                            AMC_SORT_STRING, 
                            AMC_SORT_STRING_CASELESS
                            ), 
                        True
                        )
                    )
                    {
                    $GLOBALS['a_AMC_ordering'][$s_Column][AMC_SORT_TYPE] = $a_Args[$i_Arg + 1];
                    }
                // Deal with array association.
                else
                    {
                    $b_KeepAssociation = (AMC_KEEP_ASSOCIATION == $a_Args[$i_Arg + 1]);
                    }
                // Take the next argument out of the picture.
                ++$i_Arg;
                }
            }
        // Allow array association to be defined.
        elseif (
            in_array
                (
                $a_Args[$i_Arg], 
                array
                    (
                    AMC_KEEP_ASSOCIATION, 
                    AMC_LOSE_ASSOCIATION
                    ), 
                True
                )
            )
            {
            $b_KeepAssociation = (AMC_KEEP_ASSOCIATION == $a_Args[$i_Arg]);
            }
        // Ignore sort options as they are not in the right place to be understood.
        elseif (
            in_array
                (
                $a_Args[$i_Arg], 
                array
                    (
                    AMC_SORT_REGULAR, 
                    AMC_SORT_NUMERIC, 
                    AMC_SORT_STRING, 
                    AMC_SORT_STRING_CASELESS
                    ), 
                True
                )
            )
            {
            trigger_error("Parameter $i_Arg of '{$a_Args[$i_Arg]}' is not applicable and has been ignored.", E_USER_NOTICE);
            }
        // Whatever is left is an error.
        else
            {
            trigger_error("Requested column of '{$a_Args[$i_Arg]}' is not present in the supplied array.", E_USER_ERROR);
            }
        // Get the next argument.
        ++$i_Arg;
        }

    // Determine which usort mechanism (with or without associations).
    $s_Sorter = ($b_KeepAssociation ? 'uasort' : 'usort');

    // Sort the data and get the result.
    $b_Result = $s_Sorter($a_data, 'array_multisort_column_cmp');

    // Remove the temporary global array.
    unset($GLOBALS['a_AMC_ordering']);

    // Return the results
    return $b_Result;
    }

/**
  * int array_multisort_column_cmp(array a_left, array a_right)
  **/
function array_multisort_column_cmp(array &$a_left, array &$a_right)
    {
    // Assume that the entries are the same.
    $i_Result = 0;

    // Process each column defined in the global array.
    foreach($GLOBALS['a_AMC_ordering'] as $s_Column => $a_ColumnData)
        {
        // Handle the different sort types.
        switch ($a_ColumnData[AMC_SORT_TYPE])
            {
            // Numeric.
            case AMC_SORT_NUMERIC :
                $i_ColumnCompareResult = 
                    ((intval($a_left[$s_Column]) == intval($a_right[$s_Column])) 
                    ? 
                        0 
                    : 
                        ((intval($a_left[$s_Column]) < intval($a_right[$s_Column])) 
                        ? 
                            -1 
                        : 
                            1
                        )
                    );
                break;
            // Case sensitive strings.
            case AMC_SORT_STRING :
                $i_ColumnCompareResult = strcmp((string)$a_left[$s_Column], (string)$a_right[$s_Column]);
                break;
            // Case insensitive strings.
            case AMC_SORT_STRING_CASELESS :
                $i_ColumnCompareResult = strcasecmp((string)$a_left[$s_Column], (string)$a_right[$s_Column]);
                break;
            // Regular sorting.
            case AMC_SORT_REGULAR :
            default :
                $i_ColumnCompareResult = 
                    (($a_left[$s_Column] == $a_right[$s_Column]) 
                    ? 
                        0 
                    : 
                        (($a_left[$s_Column] < $a_right[$s_Column]) 
                        ? 
                            -1 
                        : 
                            1
                        )
                    );
                break;
            }
        // Is the column in the two arrays the same?
        if (0 == $i_ColumnCompareResult)
            {
            // Continue with the next column.
            continue;
            }
        // Are we sorting descending?
        $i_Result = $i_ColumnCompareResult * (($a_ColumnData[AMC_SORT_ORDER] == AMC_SORT_DESC) ? -1 : 1);

        // As there is a difference, we do not need to continue with the remaining columns.
        break;
        }

    // Return the result.
    return $i_Result;
    }
