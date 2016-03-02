<?php use_helper('Javascript', 'Validation', 'I18N') ?>
<?php 
   $browser = strpos($_SERVER['HTTP_USER_AGENT'],"iPad");
  
   if($browser){ ?>
<meta name="viewport" 
content="width=device-width, 
 minimum-scale=1, maximum-scale=1.3" /> 
 <?php } ?>

<div id="sf_guard_auth_form">



<?php echo form_tag('@sf_guard_signin') ?>
  <table cellspacing="0" cellpadding="0" border="0" class="table contentBox">
  <tr  class="bg-darkOrange" >
    <td class="bg-darkRed alignRight">
    	<i class="icon-user-2"  
    		style="background: red;
			color: white;
			padding: 10px;
			font-size: 20px;
			border-radius: 50%"></i>
	</td>
	<td class="bg-darkRed">
		<h2 class="fg-white">User Authentication</h2>
	</td>
  </tr>
  <tr  id="sf_guard_auth_username" >
    <td class="right bg-blueLight alignRight"><h3><?php echo label_for('username', __('Username ')); ?></h3></td>
    <td >
        <?php echo form_error('username'); ?>
        <?php //echo input_tag('username', $sf_data->get('sf_params')->get('username')); ?>
        <div class="input-control text span3">
        	<input id="username" type="text" value="<?php echo $sf_params->get('username') ?>" name="username" placeholder="Enter Username" />
    	</div>
    </td>
  </tr>
  <tr  id="sf_guard_auth_password">
    <td class="right bg-blueLight alignRight" ><h3><?php echo label_for('password', __('Password ')); ?></h3></td>
    <td >
        <?php echo form_error('password'); ?>
        <?php //echo input_password_tag('password'); ?>
        <div class="input-control password span3">
        	<input id="password" type="password" value="" name="password" placeholder="Enter password" />
    	</div>
    </td>
  </tr>

    <tr id="sf_guard_auth_submit">
    <td class="right bg-blueLight alignRight"><i class="icon-unlocked"  style="background: red;
		color: white;
		padding: 10px;
		border-radius: 50%"></i>
	</td>
    <td >
        <input type="submit" name="commit" value="Sign In" class="button success" />
    </td>
    </tr>
    
    <tr id="sf_guard_auth_submit">
    <td class="">&nbsp;</td>
	<td class="left" >
<!-- 	<pre class="prettyprint"> -->
<!-- 	    &lt;div class="input-control text"&gt; -->
<!-- 	        &lt;input type="text" /&gt; -->
<!-- 	        &lt;button class="btn-clear"&gt;&lt;/button&gt; -->
<!-- 	    &lt;/div&gt; -->
<!-- 	</pre> -->
	<p ><?php echo image_tag('signin-iam.jpg'); ?></p></td>     
    </tr>   
    
    <?php 
    // echo submit_tag(__('sign in', array('class' => 'submit-button'))), 
    // echo link_to(__('Forgot your password?'), '@sf_guard_password', array('id' => 'sf_guard_auth_forgot_password')) 
    ?>
</table>
</form>
</div>
<?php echo javascript_tag("
$('username').focus();
textfieldFocus('username');
");
?>

