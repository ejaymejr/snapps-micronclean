<?php use_helper('Validation', 'Javascript') ?>
<?php
// $Source$
// $Id$


$searchEffect = '';
if (isset($searchContainerID)) {
//     $searchEffect = 'onclick="$(\'' . $searchContainerID . '\').style.display == \'none\' ' .
//                 ' return false;"';
    $searchEffect = "onclick=showHideElement('". $searchContainerID ."')";
}
//$searchEffect = '';
?>
<tr class="SearchHeaderBg">
<!-- <tr class="fg-color-white bg-color-yellow"> -->
    <td width="75" nowrap class="dataGridTableHeaderColumn alignLeft alignMiddle" 
        <?php echo $searchEffect ?> style="cursor:pointer"><?php echo HTMLForm::SearchToggle() ?> </td>
    <?php foreach ($hs->getHeaders() as $h) : ?>
    <?php
    $title = $h->getTitle();
    $tdOnClick = '';
    $spanSortOrder = '';
    
    
    $tdClass = '';
    if ($h->getSortable()) {        
        $sortOrder = 'ASC';
        $tdClass = 'dataGridTableHeaderColumn sortable-header ' . $h->getClassNames();
        
        if ($hs->getSortBy() == $h->getId()) {
            $sortOrder = $hs->getSortOrder() == 'ASC' ? 'DESC' : 'ASC';
            $tdClass .= ' current-sort';
            $spanSortOrder = '<span class="current-sort sort-' . $hs->getSortOrder() . '"></span>';
        }
        
        $tmp = array();
        $tmp['sortBy'] = $h->getId();
        $tmp['sortOrder'] = $sortOrder;
        $newQueryString = HTMLForm::ModifyQuery($_SERVER['QUERY_STRING'], $tmp);
        
        $headerURL =  $headerBaseURL . '?' . $newQueryString;
        $tdOnClick = 'onclick="showLoader(); window.location=\'' . $headerURL . '\';"';
    }
    ?>
    <td width="<?php echo $h->getWidth() ? $h->getWidth() : '' ?>" class="<?php echo $tdClass ?> alignLeft" <?php echo $h->getExtraHTML() ? $h->getExtraHTML() : '' ?> <?php echo $tdOnClick ?>><?php echo $spanSortOrder ?><?php echo $title ?></td>
    <?php endforeach; ?>
    <td width="100" nowrap class="dataGridTableHeaderColumn alignLeft">&nbsp;</td>
</tr>   
