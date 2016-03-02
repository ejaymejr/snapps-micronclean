<?php

$url        = sfConfig::get('page_heading_chdate_url', false);
$var        = sfConfig::get('page_heading_chdate_param');
$val        = $sf_params->get($var);

if ($url !== false) {
    ?>
    
    <script language="JavaScript">
    function quickCalendarSelectDate(calendar, date) {
        
        <?php if (isset($url)): ?>
        var url = '<?php echo url_for($url) . '?' . $var . '='; ?>' + date;
        if (calendar.dateClicked) {
            window.location = url;
            calendar.callCloseHandler(); // this calls "onClose" (see above)
        }
        <?php endif; ?>
    };
    </script>
    
    <div id="DIVpageHeadingChDate">
    <input type="hidden" id="quickDateInput" value="<?php echo $val; ?>" />
    <?php echo image_tag('icons/cal3.gif', 
            array('alt' => "Pick up date...",
            'id' => "calTrig_pageHeadingChdate",
            'style' => "cursor: pointer;",
            'title' => "Date selector",
            'class' => "inline-calendar-img")); ?>
    </div>
               
    <script type="text/javascript">
        Calendar.setup({
            inputField     :    "quickDateInput",     // id of the input field
            ifFormat       :    "%Y-%m-%d",      // format of the input field
            button         :    "calTrig_pageHeadingChdate",  // trigger for the calendar (button ID)
            singleClick    :    true,  
            weekNumbers    :    false,
            onSelect       :    quickCalendarSelectDate
        });
    </script>
    

    <?php
}

