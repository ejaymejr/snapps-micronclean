<?php
// $Source$
// $Id$


$navigationID = XIDX::next();
    
$datagridOptionFormActivatorID = $this->getHtmlId() . '_optionsFormActivator';
$datagridOptionFormID = $this->getHtmlId() . '_optionsForm';
$datagridOptionDivID = 'DIVdgOption_' . $this->getHtmlId();
if ($this->isAjax) {
    $datagridOptionFormActivatorID = $this->getAjaxContainerId() . '_optionsFormActivator';
    $datagridOptionFormID = $this->getAjaxContainerId() . '_optionsForm';
    $datagridOptionDivID = 'dgOption_' . $this->getAjaxContainerId();        
}    
$datagridOptionDivID .= $navigationID;    
?>
    <div class="dataGridNavigation alignRight">    
    
    
    
    <div class="dataGridPagination">    
    <?php 
    if ($this->isAjax) {
        echo pager_navigation_remote($this->pager, $this->datagridAjaxOptions);    
    } else {
        echo pager_navigation($this->pager, $this->baseURL, array('query_string' => $_SERVER['QUERY_STRING']));    
    }
    ?>
    </div>
    

    <b><?php echo $this->pager->getNbResults()  ?></b> <?php echo $this->pager->getNbResults() > 1 ? 'records' : 'record' ?>
    | <b><?php echo $this->pager->getLastPage() ?></b> <?php echo $this->pager->getLastPage() > 1 ? 'pages' : 'page' ?>
    | <a id="<?php echo $datagridOptionFormActivatorID ?>" href="javascript;" onclick="showHideElement('<?php echo $datagridOptionDivID ?>');return false;">Options</a>
    &nbsp; &nbsp;    
    
    </div>
    
    
    <div id="<?php echo $datagridOptionDivID ?>" class="dataGridOption" style="display:none;">
    <?php
    if ($this->isAjax) {
        echo form_remote_tag($this->datagridAjaxOptions, ' style="display:inline;" id="' . $datagridOptionFormID . '"');
        echo input_hidden_tag('ajaxContainerId', $this->getAjaxContainerId());
    } else {
        echo form_tag($this->getBaseURL(), array('style' => 'display:inline;', 'method' => 'get', 'id' => $datagridOptionFormID, 'name' => 'FORM_' . $this->getHtmlId()));
    }   
    ?>
    <table width="100%" cellspacing="2" cellpadding="2" border="0">
    <tr>
        <td width="90%">&nbsp;</td>
        <td nowrap># per page</td>
        <td width="10"><?php echo input_tag('results', $this->pager->getMaxPerPage(), 'size="4" class="alignRight"') ?></td>
    
        <td nowrap>Go to Page:</td>
        <td width="10"><?php echo input_tag('page', $this->pager->getPage(), 'size="4" class="alignRight"') ?></td>
    
        <td>&nbsp;</td>
        <td><?php echo submit_tag('Go'); ?></td>
    </tr>
    </table>
    </form>
    </div>
    

