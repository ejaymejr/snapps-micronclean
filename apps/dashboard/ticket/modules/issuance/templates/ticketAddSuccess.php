<?php 
   $browser = strpos($_SERVER['HTTP_USER_AGENT'],"iPad");
  
   if($browser){ ?>
<meta name="viewport" 
content="width=device-width, 
 minimum-scale=.8, maximum-scale=.8" /> 
 <?php } ?>
 

<!--                 <button id="staticDialog">Static dialog</button> -->
<!--                 <button id="draggableDialog">Draggable dialog</button> -->
<!--                 <button id="positionedDialog">Positioned dialog</button> -->
<!--                 <button id="keepDialog">Keep opened dialog</button> -->
                <!--button id="setupDialog">Setup dialog</button-->
                <script type="text/javascript">
                    $(document).ready(function(){
                        $('#staticDialog').click(function(e) {
                            $.Dialog({
                                'title'      : 'My static dialog',
                                'content'    : 'This content can be in HTML.<br />You can add custom function to your buttons!<br /><br /><b>Features:</b><ul><li>Easy to use!</li><li>Customizable</li><li>Powerful!</li></ul>',
                                'buttons'    : {
                                    'Ok'    : {
                                        'action': function() {}
                                    },
                                    'Cancel'     : {
                                        'action': function() {}
                                    }
                                }
                            });
                        });
                        $('#draggableDialog').click(function(e) {
                            $.Dialog({
                                'title'      : 'My draggable dialog',
                                'content'    : 'This content can be in HTML.<br />You can add custom function to your buttons!<br /><br /><b>Features:</b><ul><li>Easy to use!</li><li>Customizable</li><li>Powerful!</li></ul>',
                                'draggable'  : true,
                                'buttonsAlign': 'right',
                                'buttons'    : {
                                    'Ok'    : {
                                        'action': function() {}
                                    }
                                }
                            });
                        });
                        $('#positionedDialog').click(function(e) {
                            $.Dialog({
                                'title'      : 'My right dialog',
                                'content'    : 'This content can be in HTML.<br />You can add custom function to your buttons!<br /><br /><b>Features:</b><ul><li>Easy to use!</li><li>Customizable</li><li>Powerful!</li></ul>',
                                'draggable'  : true,
                                'closeButton': true,
                                'position'   : {
                                    'zone'   : 'right'
                                },
                                'buttons'    : {
                                    'Ok'    : {
                                        'action': function() {}
                                    },
                                    'Retry'     : {
                                        'action': function() {}
                                    },
                                    'Cancel'     : {
                                        'action': function() {}
                                    }
                                }
                            });
                        });
                        $('#keepDialog').click(function(e) {
                            $.Dialog({
                                'title'      : 'My opened dialog',
                                'content'    : 'This content can be in HTML.<br />You can add custom function to your buttons!<br /><br /><b>Features:</b><ul><li>Easy to use!</li><li>Customizable</li><li>Powerful!</li></ul>',
                                'draggable'  : true,
                                'keepOpened' : true,
                                'closeButton': true,
                                'buttonsAlign': 'right',
                                'buttons'    : {
                                    'Ok'    : {
                                        'action': function() {}
                                    }
                                }
                            });
                        });
                        /*$('#setupDialog').click(function(e) {
                            $.Dialog({
                                'title'      : 'Step 1 - Dialog',
                                'content'    : 'This content is the first step.<br /><br /><b>Steps:</b><ol><li>Customize</li><li>Check</li><li>Install!</li></ol>',
                                'draggable'  : true,
                                'keepOpened' : true,
                                'closeButton': true,
                                'buttonsAlign': 'right',
                                'buttons'    : {
                                    'Next'    : {
                                        'action': function() {}
                                    }
                                }
                            });
                        });*/
                    });
                </script>
<form name="FORMadd" id="IDFORMadd"
	action="<?php echo url_for('issuance/ticketAdd'). '?id=' . $sf_params->get('id');?>"
	method="post">
		<?php echo input_tag('ticketID', $sf_params->get('ticketID'), 'type=hidden'); //, 'type=hidden'?>
        <div class="page-region-content tiles" style="padding-left: 20px; padding-top: 20px;">
        	<?php 
        		$cnt = 0;
        		$detailID = 0;
        		$headerID = $sf_params->get('tID');
        		
        		$ticketHeader = TicketDesignHeaderPeer::retrieveByPK($headerID);
        		$ticketDetail = TicketDesignDetailPeer::GetDataByHeaderID($headerID);
         		foreach($ticketDetail as $detail):
         			$cnt++;
         			include_partial('issue_ticket', array('detail'=> $detail));
         			$detailID = $detail->getId();
         		endforeach;
         		$valueOpt = TicketDesignDetailPeer::GetValueOptById($detailID);
         		$width = (sizeof($valueOpt) * 2 * 150) - 150;
        	?>
        
            <div class="tile-group tile-drag " >
                <div class="tile icon" onclick= "javascript: document.getElementById('IDFORMadd').submit()" >
                    <div class="tile-content bg-color-green"  ><i class="icon-save"></i></div>
                    <div class="brand">
                        <span class="name">Save Entry</span>
                    </div>
                </div>
			</div>
			
			<div class="tile-group tile-drag " style="width: <?php echo $width; ?>px"></div>
		</div>
 </form>      
    