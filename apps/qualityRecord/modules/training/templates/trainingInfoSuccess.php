<?php
if ($id){
    $rec = HrTrainingPeer::retrieveByPK($id);
    $sf_params->set('description', $rec->getDescription());
    $sf_params->set('place_held', $rec->getPlaceHeld());
    $sf_params->set('date_from', $rec->getDateFrom());
    $sf_params->set('date_to', $rec->getDateTo());
    $sf_params->set('name_trainor', $rec->getNameTrainor());
    $sf_params->set('license_no', $rec->getLicenseNo());
    $sf_params->set('no_hrs', $rec->getNoHrs());
    $sf_params->set('remarks', $rec->getRemarks());
    
    include_partial('training_data', array('id'=>$id));
}else{
    echo '<div class="alignCenter negative"><h2><b>must choose a Training!</b></h2></div>';
}