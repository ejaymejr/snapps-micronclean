<?php
// $Source$
// $Id$

class HTMLGrid
{
    var $gridID;
    var $gridFormName;
    var $gridTableID;
    var $formTag;
    var $actionURL;
    var $header;
    var $nav;
    var $footer;
    var $columns;
    var $widths;
    var $aligns;
    var $headerAligns;
    var $rows;
    var $colrowspans;
    var $wraps;
    
    var $topSummaryRows;
    var $bottomSummaryRows;
    

    function HTMLGrid(
            $gridID, 
            $gridFormName = '',
            $gridTableID, 
            $formTag = false,
            $actionURL = '',
            $columns = array(), 
            $rows = array(), 
            $header = '', 
            $footer = '', 
            $nav = '', 
            $widths = array(), 
            $colrowspans = array(),
            $wraps = array())
    {
        $this->gridID = $gridID;
        $this->gridFormName = $gridFormName;
        $this->gridTableID = $gridTableID;
        $this->formTag = $formTag;
        $this->actionURL = $actionURL;
        $this->columns = $columns;
        $this->rows = $rows;
        $this->header = $header;
        $this->footer = $footer;
        $this->nav = $nav;
        $this->widths = $widths;
        $this->colrowspans = $colrowspans;
        $this->wraps = $wraps;
        
        $this->aligns = array();
        $this->headerAligns = array();
        
        $this->topSummaryRows = false;
        $this->bottomSummaryRows = false;
    }
    
    function _a($a) 
    {
        $a = strtoupper($a);
        switch ($a) {
            case 'C' : return 'alignCenter'; break;
            case 'R' : return 'alignRight'; break;
            case 'L' : return 'alignLeft'; break;
            default : return 'alignLeft'; break;
        }        
    }

    function _ha($col)
    {
        if (sizeof($this->headerAligns)) {
            return $this->_a($this->headerAligns[$col]);        
        } else return $this->_a('');
    }
    function _ca($col)
    {
        if (sizeof($this->aligns)) {
            return $this->_a($this->aligns[$col]);        
        } else return $this->_a('');
    }
    
    function _w($col)
    {
        if (sizeof($this->widths)) {
            return ' width="' . $this->widths[$col] . '" ';        
        } else return '';
        
    }
    
    function _wrap($col)
    {
        $wrap = '';
        if (sizeof($this->wraps)) {
            $wrap = ' wrap="' . $this->wraps[$col] . '" ';    

            if ($this->wraps[$col] == 'off') {
                $wrap .= ' nowrap ';
            }
        }
        
        return $wrap;
        
    }
    
    function HTML()
    {
        ob_start();
        ?>
        
<div class="defaultGrid dataGridContainer" style="width:100%;" id="<?=$this->gridID?>">  

    <?php if ($this->header != '') : ?>
    <div class="dataGridHeader"><?php echo $this->header; ?></div>
    <?php endif; ?>

    <?php if ($this->nav != '') : ?>
    <div class="dataGridNavigation"><?php  echo $this->nav; ?></div>
    <?php endif; ?>

    
    <?php
    if(sizeof($this->rows)) { ?>
    
    <div class="dataGridContent">
    <?php if ($this->formTag !== false) : ?>
        <?php echo $this->formTag; ?>
    <?php endif; ?>
        <table id="<?=$this->gridTableID?>" width="100%" cellpadding="4" cellspacing="2" border="0">
            <?php for ($i = 0; $i < sizeof($this->columns); $i++) : ?>
                <col />
            <?php endfor; ?> 
        <thead>  
        <tr class="dataGridTableHeader">
            <?php for ($i = 0; $i < sizeof($this->columns); $i++) : ?>
                <td <?=$this->_w($i)?> class="dataGridTableHeaderColumn alignTop <?=$this->_ha($i)?>"  <?=$this->_wrap($i)?>><?=$this->columns[$i]?></td>
            <?php endfor; ?>            
        </tr>
        </thead>
        
        <tbody>
        <?php if ($this->topSummaryRows !== false) : ?>
        <?php foreach ($this->topSummaryRows as $row) : ?>
            <tr class="dataGridTableHeader">
                <?php for ($i = 0; $i < sizeof($row); $i++) : $col = $row[$i]; ?>
                <td class="alignTop <?=$this->_ca($i)?>" <?=$this->_wrap($i)?>><b><?=$col?></b></td>
                <?php endfor; ?>
            </tr>        
        <?php endforeach; ?>        
        <?php endif; ?>
        <?php
        $rowCount = 0;
        foreach($this->rows as $row) {            
            $rowClass = (($rowCount % 2) == 0) ? "dataGridRowOdd" : "dataGridRowEven";
            $rowID = $this->gridID . '_r_' . $rowCount;
            $checkBoxID = '';            
            ?>
            <tr class="<?=$rowClass?>"
                id="<?=$rowID?>"
                onMouseOver="rowHovered('<?=$rowID?>');"
                onMouseOut="rowUnhovered('<?=$rowID?>');"
                onMouseDown="rowClicked('<?=$rowID?>', null);"
                >
                <?php for ($i = 0; $i < sizeof($row); $i++) : $col = $row[$i]; ?>
                <td class="alignTop <?=$this->_ca($i)?>" <?=$this->_wrap($i)?>><?=$col?></td>
                <?php endfor; ?>
            </tr>
            <?php
            $rowCount++;
        }
        ?>
        <?php if ($this->bottomSummaryRows !== false) : ?>
        <?php foreach ($this->bottomSummaryRows as $row) : ?>
            <tr class="dataGridTableHeader">
                <?php for ($i = 0; $i < sizeof($row); $i++) : $col = $row[$i]; ?>
                <td class="alignTop <?=$this->_ca($i)?>" <?=$this->_wrap($i)?>><b><?=$col?></b></td>
                <?php endfor; ?>
            </tr>        
        <?php endforeach; ?>        
        <?php endif; ?>
        </tbody>
        </table>
    </div>

    <?php if ($this->formTag !== false) : ?>
    </form>
    <?php endif; ?>

    <?php } // if sizeof(selectedData) ?> 

    <?php if ($this->footer != '') : ?>
    <div class="dataGridFooter"><?php echo $this->footer; ?></div>
    <?php endif; ?>

    <?php if($this->nav != '' && sfConfig::get('app_grid_rows_per_page', 10) >= sfConfig::get('app_grid_double_paging_min', 20) && sizeof($this->rows) >= sfConfig::get('app_grid_double_paging_min', 20) ) : ?>
    <div class="dataGridNavigation"><?php  echo $this->nav; ?></div>
    <?php endif; ?>


    
</div>
    

        <?php    
        $grid = ob_get_contents();
        ob_end_clean();

        return $grid;
    }
}

?>