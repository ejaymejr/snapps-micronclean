<?php use_helper('Form', 'Javascript', 'PagerNavigation');
sfConfig::set('app_page_heading', 'Change Password');

//$pass = 'somestring'; // password
//$salt = '}#f4ga~g%7hjg4&j(7mk?/!bj30ab-wi=6^7-$^R9F|GK5J#E6WT;IO[JN'; // random string
//
//$hash = md5($pass); // md5 hash #1
//$hash_md5 = md5($salt.$pass); // md5 hash with salt #2
//$hash_md5_double = md5(sha1($salt.$pass)); // md5 hash with salt & sha1 #3
//$hash1 = sha1($pass); // sha1 hash #4
//$hash1_sha1 = sha1($salt.$pass); // sha1 hash with salt #5
//$hash1_sha1_double = sha1(md5($salt.$pass)); // sha1 hash with salt & md5 #6
//
//// echo now
//echo 'Original Password: '.$pass.'<br><br>';
//echo 'Original Salt: '.$salt.'<br><br>';
//echo 'MD5: '.$hash.'<br><br>';
//echo 'MD5 with Salt: '.$hash_md5.'<br><br>';
//echo 'MD5 with Salt & Sha1: '.$hash_md5_double.'<br><br>';
//echo 'Sha1: '.$hash1.'<br><br>';
//echo 'Sha1 with Salt: '.$hash1_sha1.'<br><br>';
//echo 'Sha1 with Salt & MD5: '.$hash1_sha1_double.'<br><br>';  



?>
<form name="FORMadd" id="IDFORMadd"
	action="<?php echo url_for('dtr/passwordChange'). '?id=' . $sf_params->get('id');?>"
	method="post">
	<table width="100%" class="FORMtable" border="0" cellpadding="4"
		cellspacing="0">
		<tr>
			<td class="FORMcell-left FORMlabel" nowrap width='10%'>UserName: </td>
			<td class="FORMcell-right" nowrap width='100'><?php
			echo $sf_user->getUsername();
			?>
			</td>
			<td class="FORMcell-left FORMlabel" nowrap>&nbsp;</td>
		</tr>		
		<tr>
			<td class="FORMcell-left FORMlabel" nowrap width='10%'>Current Password: </td>
			<td class="FORMcell-right" nowrap width='100'><?php
			echo input_password_tag('cpass', $sf_params->get('cpass') );
			?><span class="negative"> existing password</span>
			</td>
			<td class="FORMcell-left FORMlabel" nowrap>&nbsp;</td>
		</tr>
		<tr>
			<td class="FORMcell-left FORMlabel" nowrap width='10%'>Enter New Password: </td>
			<td class="FORMcell-right" nowrap width='100'><?php
	        echo input_password_tag('npass', $sf_params->get('npass') );
			?><span class="negative"> Please remember this password</span></td>
			<td class="FORMcell-left FORMlabel" nowrap>&nbsp;</td>
		</tr>
		<tr>
			<td class="FORMcell-left FORMlabel" nowrap width='10%'>Re-Enter New Password: </td>
			<td class="FORMcell-right" nowrap width='100'><?php
	        echo input_password_tag('cnpass', $sf_params->get('cnpass') );
			?><span class="negative"> Please dont paste the confirm password</span></td>
			<td class="FORMcell-left FORMlabel" nowrap>&nbsp;</td>
		</tr>
		<tr>
			<td class="FORMcell-left FORMlabel" nowrap></td>
			<td class="FORMcell-right" nowrap><?php
	        echo submit_tag('Change Password');
			?></td>
			<td class="FORMcell-left FORMlabel" nowrap>&nbsp;</td>
		</tr>
	</table>
</form>		