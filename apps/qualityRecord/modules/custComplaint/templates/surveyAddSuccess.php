<?php
$pageTitle = 'Customer Satisfaction Survey';

$SURVEY_LINES = array(
    array('Product Knowledge', 'Product Knowledge'),
    array('Professionalism', 'Professionalism'),
    array('Commitment', 'Commitment'),
    array('Resourcefulness', 'Resourcefulness'),
    array('Responsiveness', 'Responsiveness'),
    array('Cleanliness of Product', 'Cleanliness of Product'),
    array('No of Rejects / Non - Conforming Items', 'No of Rejects / Non - Conforming Items'),
    array('Overal Satisfaction Level', 'Overal Satisfaction Level'),
);

$FORMrating = array();
foreach ($SURVEY_LINES as $sLine) {
    $FORMrating[$sLine[0]] = 0;
}

?>
<script language="javascript">
function checkSurvey(total)
{
	var OK = false;
	var totalZero = 0;
	var obj = null;

	var ratingPre = 'FORMrating';
	for (var i = 1; i <= total; i++)
	{
		var ratingID = ratingPre + '_' + i;
		obj = window.document.getElementById(ratingID);
		// alert(ratingID);
		// alert(obj);
		if (!obj) {
			// alert('Where is ' + ratingID);
		} else if (obj.value == '0')
		{
			totalZero++;
		}
	}

	if (totalZero)
	{
		alert('Please indicate your rating for each criteria.');
		OK = false;
	} else OK = true;

	return OK;
}

function rateThis(rowID, rating)
{
	var selectedID = rowID + '_' + rating;
	// alert(selectedID);
	for (var i = 1; i <= 5; i++)
	{
		var curID = rowID + '_' + i;
		if (curID == selectedID)
		{
			starRate(curID);
		} else {
			starUnrate(curID);
		}
	}

}

function starRate(rowID) {
	// alert(rowID);
	var obj = document.getElementById(rowID);
	if(obj) {
		rate(obj);
	} else alert('Object not found.');
}
function starUnrate(rowID) {
	// alert(rowID);
	var obj = document.getElementById(rowID);
	if(obj) {
		unrate(obj);
	} else alert('Object not found.');
}


function rate(obj) {
	// alert(obj.className);
	if(obj) {
		if(obj.className.indexOf(' unrated') > -1) {
			obj.className = obj.className.replace(/unrated/, 'rated');
		} else {
			obj.className += ' rated';
		}
	}
}
function unrate(obj) {
	// alert(obj.className);
	if(obj) {
		if(obj.className.indexOf(' rated') > -1) {
			obj.className = obj.className.replace(/rated/, 'unrated');
		} else {
			obj.className += ' unrated';
		}
	}
}

</script> 
<form onsubmit="return checkSurvey(<?php echo sizeof($SURVEY_LINES); ?>);" name="FORMgrid" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
<table width="100%" cellpadding="4" cellspacing="2" border="0">
<tr><td height="35" colspan="6" align="center" bgcolor="#FFAC25" nowrap><span style="color: #FFF"><H2>CUSTOMER SURVEY FORM</H2></span></td></tr>
<tr>
<td width="500">
<div class="dataGridContainer" style="width:470px; margin:auto;"> 
    <p style="text-align:justify;">How would you rate our services provided to you based on<br />the following attributes?</p>
    <div class="dataGridContent">
        <table width="100%" cellpadding="4" cellspacing="2" border="0">
        <tr class="dataGridTableHeader">
            <td nowrap width="20" class="dataGridTableHeaderColumn alignCenter alignTop">No</td>
            <td nowrap width="200" class="dataGridTableHeaderColumn alignCenter alignTop">Criteria</td>
            <td nowrap width="250" class="dataGridTableHeaderColumn alignCenter alignTop">Rating</td>
        </tr>
        
        <?php $SN = 1; $rowCount = 0; foreach ($SURVEY_LINES as $sLine) : ?>
            <?php
            $rowClass = (($rowCount % 2) == 0) ? "dataGridRowOdd" : "dataGridRowEven";
            $rowID = 'gridRow_' . $SN;
            $ratingID = 'FORMrating_' . $SN;
            ?>
            <tr class="<?=$rowClass?>"
                id="<?=$rowID?>"
                >
                <td nowrap class="alignCenter alignTop "><?=$SN?>&nbsp;</td>
                <td class="alignLeft alignTop " nowrap><span class="survey-criteria"><?php echo $sLine[1]; ?>&nbsp;</span></td>
                <td class="alignLeft alignTop rating" nowrap>  
                    <input type="hidden" id="<?=$ratingID?>" name="FORMrating[<?=$sLine[0]?>]" value="0" />
                    <ul class="star-rating">
                        <li><a id="<?=$rowID?>_1" onclick="document.getElementById('<?=$ratingID?>').value=1; rateThis('<?=$rowID?>', 1); return false;" href="#" title="1 star out of 5" class="one-star">1</a></li>
                        <li><a id="<?=$rowID?>_2" onclick="document.getElementById('<?=$ratingID?>').value=2; rateThis('<?=$rowID?>', 2); return false;" href="#" title="2 stars out of 5" class="two-stars">2</a></li>
                        <li><a id="<?=$rowID?>_3" onclick="document.getElementById('<?=$ratingID?>').value=3; rateThis('<?=$rowID?>', 3); return false;" href="#" title="3 stars out of 5" class="three-stars">3</a></li>
                        <li><a id="<?=$rowID?>_4" onclick="document.getElementById('<?=$ratingID?>').value=4; rateThis('<?=$rowID?>', 4); return false;" href="#" title="4 stars out of 5" class="four-stars">4</a></li>
                        <li><a id="<?=$rowID?>_5" onclick="document.getElementById('<?=$ratingID?>').value=5; rateThis('<?=$rowID?>', 5); return false;" href="#" title="5 stars out of 5" class="five-stars">5</a></li>
                    </ul> 
                </td>
            </tr>
            
        <?php $SN++; $rowCount++; endforeach; ?>
        </table>
    </div>
</div>

</td>
<td style="vertical-align:bottom;">
    <p style="text-align:justify;">How could we improve our services?</p>
    <textarea name="FORMcomment" cols="60" rows="20"></textarea>
    <br />
        <input type="submit" class="submit-button" 
            name="FORMsubmit" value=" Submit " 
            />
</td>
</tr>
</table>
</form>