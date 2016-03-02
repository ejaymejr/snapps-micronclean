<?php
function category_tag($name, $val = '', $options = array(), $extraJS = '')
{
    $keywordField = sfConfig::get('snappsg_q_category', 'q');
    $id = $name;
    
    $tag = '';    
    $tag .= input_tag($name, $val, $options);
    $tag .= link_to(image_tag('icons/lookup.gif'), '#', 
                    array(  'class' => 'absMiddle', 
                            'onclick' => $extraJS . "categoryField='$id';\$('$keywordField').value='';Element.show('DIVlookupCategory');\$('$keywordField').focus();return false;"));

    return $tag;
}
function vendor_tag($name, $val = '', $options = array(), $extraJS = '')
{
    $keywordField = sfConfig::get('snappsg_q_vendor', 'q');
    $id = $name;
    
    $tag = '';    
    $tag .= input_tag($name, $val, $options);
    $tag .= link_to(image_tag('icons/lookup.gif'), '#', 
                    array(  'class' => 'absMiddle', 
                            'onclick' => $extraJS . "vendorField='$id';\$('$keywordField').value='';Element.show('DIVlookupVendor');\$('$keywordField').focus();return false;"));

    return $tag;
}