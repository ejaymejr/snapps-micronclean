<?php
class HTMLLib
{
	public static function CreateInputText($id, $value, $span=null)
	{
//		var_dump($value);
//		var_dump(sfContext::getInstance()->getRequest()->getParameter($id));
//		if ( ! isset(sfContext::getInstance()->getRequest()->getParameter($id) )):
//			$value == '';
//		endif;
		return '
			<div class="input-control text '.$span.' ">
				<input id="'.$id.'" name="'.$id.'" type="text" value="'.$value.'" placeholder="input '.$id.'"/>
				<button class="btn-clear"></button>
			</div>
		';
	}
	
	public static function CreateCheckBox($id, $label, $chkd=null, $span=null)
	{
		if ($chkd == 'YES'):
			$chkd = 'checked';
		endif;
		//var_dump(sfContext::getInstance()->getResponse()->getParameter('primary_ed'));
		return '
			<div class="input-control checkbox '.$span.' ">
				<label>
				<input id="'.$id.'" name="'.$id.'" type="checkbox"  '.$chkd.'  />
				<span class="check"></span>
				'.$label.'	
				<label>
			</div>
		';
	}
	
	public static function CreateRadio($id, $label, $chkd=null, $span=null)
	{
		//var_dump(sfContext::getInstance()->getResponse()->getParameter('primary_ed'));
		return '
			<div class="input-control radio '.$span.' ">
				<label>
				<input id="'.$id.'" name="'.$id.'" type="radio"  '.$chkd.' value="'.$label.'" />
				<span class="check"></span>
				'.$label.'	
				<label>
			</div>
		';
	}
	
	public static function CreateTextArea($id, $value, $span=null)
	{
		//var_dump(sfContext::getInstance()->getResponse()->getParameter('primary_ed'));
		return '
			<div class="input-control textarea '.$span.' ">
				<textarea id="'.$id.'" name="'.$id.'" placeholder="input '.$id.'"/>'.$value.'</textarea>
			</div>
		';
	}
	
	public static function CreateSubmitButton($id, $message)
	{
		return '
			<button class="success" id="'.$id.'" name="'.$id.'" >'.$message.'</button>
		';
	}
	
	public static function CreateDateInput($varname, $value, $span=null, $format=null)
	{
		if ($format = 'Y-m-d') $format = 'yyyy-mm-dd';
		//if ($format = 'd-m-Y') $format = 'mm-dd-yyyy';
		$format = $format ?  'data-format='.$format : '';
		return '
		<div class="input-control text '.$span.'" data-role="datepicker" data-week-start="0" data-effect="fade" '.$format.'>
    	<input type="text" name="'.$varname.'" value= "'. $value .'" id="'.$varname.'">
    	<button class="btn-date" type="button"></button>
    	</div>
				';
	}
	
	public static function CreateSelect($varname, $value, $options, $span=null)
	{
		return '
		<div class="input-control select '.$span.'">'.select_tag($varname, options_for_select($options, $value) ).'</div>
		';
	}
	
	public static function CreateSelectWithSerch($varname, $value, $options, $span=null)
	{
		$name = HrLib::CamelCase($varname);
		$id = 'search'.$name;
		$script = '
		<script type="text/javascript">
//		$(document).ready(function() {
//			$("#select").searchable();
//		});
		</script>
		<div class="input-control select '.$span.'">
			'.select_tag($varname, options_for_select($options, $value) ).'
		</div>
		<a href="#" id="'.$id.'" class="button default">'.$name.'</a>
		';
		return $script;
	}
	
	public static function CreateFileSelect($id, $span=null)
	{
		//var_dump(sfContext::getInstance()->getResponse()->getParameter('primary_ed'));
		return '
			<div class="input-control file '.$span.' ">
				<input id="'.$id.'" name="'.$id.'" type="file" placeholder="input '.$id.'"/>
				<button class="btn-file"></button>
			</div>
		';
	}
	
	public static function CreateImageContainer($image, $message, $span=null)
	{
		//var_dump(sfContext::getInstance()->getResponse()->getParameter('primary_ed'));
		return $image;
		return '
			<div class="image-container shadow '.$span.' ">
			'. $image .'
			<div class="overlay-fluid">
			'. $message .'
			</div>
			</div>
		';
	}
	
	public static function CreateSelectActiveUser($varname, $value, $span=null)
	{
		$activeUser = array('PARI'=>'PARI','MEIZHEN'=>'MEIZHEN', 'VELU'=>'VELU','HUIPING'=>'HUIPING','REYNAN'=>'REYNAN','REX'=>'REX','MELVIN'=>'MELVIN','TERENCE'=>'TERENCE','ADELINE'=>'ADELINE','NYOMAN'=>'NYOMAN','EMAN'=>'EMAN',);
		$activeUser = array_merge(array($value=>$value), $activeUser);
		return '<div class="input-control select '.$span.'">'.select_tag($varname, options_for_select($activeUser, $value) ).'</select>
		</div>	
			';
	}
	 	
	public static function CreateSelectCountry($span=null)
	{
		return '<div class="input-control select '.$span.'">
		<select name="country" id="country"
			class="" tabindex="7">
			<option value="">Select One</option>
			<option value="sg">Singapore</option>
			<option value="af">Afghanistan</option>

			<option value="ax">Aland Islands</option>
			<option value="al">Albania</option>
			<option value="dz">Algeria</option>
			<option value="as">American Samoa</option>
			<option value="ad">Andorra</option>
			<option value="ao">Angola</option>

			<option value="ai">Anguilla</option>
			<option value="aq">Antarctica</option>
			<option value="ag">Antigua and Barbuda</option>
			<option value="ar">Argentina</option>
			<option value="am">Armenia</option>
			<option value="aw">Aruba</option>

			<option value="au">Australia</option>
			<option value="at">Austria</option>
			<option value="az">Azerbaijan</option>
			<option value="bs">Bahamas</option>
			<option value="bh">Bahrain</option>
			<option value="bd">Bangladesh</option>

			<option value="bb">Barbados</option>
			<option value="by">Belarus</option>
			<option value="be">Belgium</option>
			<option value="bz">Belize</option>
			<option value="bj">Benin</option>
			<option value="bm">Bermuda</option>

			<option value="bt">Bhutan</option>
			<option value="bo">Bolivia</option>
			<option value="ba">Bosnia and Herzegovina</option>
			<option value="bw">Botswana</option>
			<option value="bv">Bouvet Island</option>
			<option value="br">Brazil</option>

			<option value="io">British Indian Ocean Territory</option>
			<option value="vg">British Virgin Islands</option>
			<option value="bn">Brunei</option>
			<option value="bg">Bulgaria</option>
			<option value="bf">Burkina Faso</option>
			<option value="bi">Burundi</option>

			<option value="kh">Cambodia</option>
			<option value="cm">Cameroon</option>
			<option value="ca">Canada</option>
			<option value="cv">Cape Verde</option>
			<option value="ky">Cayman Islands</option>
			<option value="cf">Central African Republic</option>

			<option value="td">Chad</option>
			<option value="cl">Chile</option>
			<option value="cn">China</option>
			<option value="cx">Christmas Island</option>
			<option value="cc">Cocos (Keeling) Islands</option>
			<option value="co">Colombia</option>

			<option value="km">Union of the Comoros</option>
			<option value="cg">Congo</option>
			<option value="ck">Cook Islands</option>
			<option value="cr">Costa Rica</option>
			<option value="hr">Croatia</option>
			<option value="cu">Cuba</option>

			<option value="cy">Cyprus</option>
			<option value="cz">Czech Republic</option>
			<option value="cd">Democratic Republic of Congo</option>
			<option value="dk">Denmark</option>
			<option value="xx">Disputed Territory</option>
			<option value="dj">Djibouti</option>

			<option value="dm">Dominica</option>
			<option value="do">Dominican Republic</option>
			<option value="tl">East Timor</option>
			<option value="ec">Ecuador</option>
			<option value="eg">Egypt</option>
			<option value="sv">El Salvador</option>

			<option value="gq">Equatorial Guinea</option>
			<option value="er">Eritrea</option>
			<option value="ee">Estonia</option>
			<option value="et">Ethiopia</option>
			<option value="fk">Falkland Islands</option>
			<option value="fo">Faroe Islands</option>

			<option value="fm">Federated States of Micronesia</option>
			<option value="fj">Fiji</option>
			<option value="fi">Finland</option>
			<option value="fr">France</option>
			<option value="gf">French Guyana</option>
			<option value="pf">French Polynesia</option>

			<option value="tf">French Southern Territories</option>
			<option value="ga">Gabon</option>
			<option value="gm">Gambia</option>
			<option value="ge">Georgia</option>
			<option value="de">Germany</option>
			<option value="gh">Ghana</option>

			<option value="gi">Gibraltar</option>
			<option value="gr">Greece</option>
			<option value="gl">Greenland</option>
			<option value="gd">Grenada</option>
			<option value="gp">Guadeloupe</option>
			<option value="gu">Guam</option>

			<option value="gt">Guatemala</option>
			<option value="gn">Guinea</option>
			<option value="gw">Guinea-Bissau</option>
			<option value="gy">Guyana</option>
			<option value="ht">Haiti</option>
			<option value="hm">Heard Island and McDonald Islands</option>

			<option value="hn">Honduras</option>
			<option value="hk">Hong Kong</option>
			<option value="hu">Hungary</option>
			<option value="is">Iceland</option>
			<option value="in">India</option>
			<option value="id">Indonesia</option>

			<option value="ir">Iran</option>
			<option value="iq">Iraq</option>
			<option value="xe">Iraq-Saudi Arabia Neutral Zone</option>
			<option value="ie">Ireland</option>
			<option value="il">Israel</option>
			<option value="it">Italy</option>

			<option value="ci">Ivory Coast</option>
			<option value="jm">Jamaica</option>
			<option value="jp">Japan</option>
			<option value="jo">Jordan</option>
			<option value="kz">Kazakhstan</option>
			<option value="ke">Kenya</option>

			<option value="ki">Kiribati</option>
			<option value="kw">Kuwait</option>
			<option value="kg">Kyrgyz Republic</option>
			<option value="la">Laos</option>
			<option value="lv">Latvia</option>
			<option value="lb">Lebanon</option>

			<option value="ls">Lesotho</option>
			<option value="lr">Liberia</option>
			<option value="ly">Libya</option>
			<option value="li">Liechtenstein</option>
			<option value="lt">Lithuania</option>
			<option value="lu">Luxembourg</option>

			<option value="mo">Macau</option>
			<option value="mk">Macedonia</option>
			<option value="mg">Madagascar</option>
			<option value="mw">Malawi</option>
			<option value="my">Malaysia</option>
			<option value="mv">Maldives</option>

			<option value="ml">Mali</option>
			<option value="mt">Malta</option>
			<option value="mh">Marshall Islands</option>
			<option value="mq">Martinique</option>
			<option value="mr">Mauritania</option>
			<option value="mu">Mauritius</option>

			<option value="yt">Mayotte</option>
			<option value="mx">Mexico</option>
			<option value="md">Moldova</option>
			<option value="mc">Monaco</option>
			<option value="mn">Mongolia</option>
			<option value="ms">Montserrat</option>

			<option value="ma">Morocco</option>
			<option value="mz">Mozambique</option>
			<option value="mm">Myanmar</option>
			<option value="na">Namibia</option>
			<option value="nr">Nauru</option>
			<option value="np">Nepal</option>

			<option value="nl">Netherlands</option>
			<option value="an">Netherlands Antilles</option>
			<option value="nc">New Caledonia</option>
			<option value="nz">New Zealand</option>
			<option value="ni">Nicaragua</option>
			<option value="ne">Niger</option>

			<option value="ng">Nigeria</option>
			<option value="nu">Niue</option>
			<option value="nf">Norfolk Island</option>
			<option value="kp">North Korea</option>
			<option value="mp">Northern Mariana Islands</option>
			<option value="no">Norway</option>

			<option value="om">Oman</option>
			<option value="pk">Pakistan</option>
			<option value="pw">Palau</option>
			<option value="ps">Occupied Palestinian Territories</option>
			<option value="pa">Panama</option>
			<option value="pg">Papua New Guinea</option>

			<option value="py">Paraguay</option>
			<option value="pe">Peru</option>
			<option value="ph">Philippines</option>
			<option value="pn">Pitcairn Islands</option>
			<option value="pl">Poland</option>
			<option value="pt">Portugal</option>

			<option value="pr">Puerto Rico</option>
			<option value="qa">Qatar</option>
			<option value="re">Reunion</option>
			<option value="ro">Romania</option>
			<option value="ru">Russia</option>
			<option value="rw">Rwanda</option>

			<option value="sh">Saint Helena and Dependencies</option>
			<option value="kn">Saint Kitts & Nevis</option>
			<option value="lc">Saint Lucia</option>
			<option value="pm">Saint Pierre and Miquelon</option>
			<option value="vc">Saint Vincent and the Grenadines</option>
			<option value="ws">Samoa</option>

			<option value="sm">San Marino</option>
			<option value="st">Sao Tome and Principe</option>
			<option value="sa">Saudi Arabia</option>
			<option value="sn">Senegal</option>
			<option value="sc">Seychelles</option>
			<option value="sl">Sierra Leone</option>

			<option value="sg" SELECTED>Singapore</option>
			<option value="sk">Slovakia</option>
			<option value="si">Slovenia</option>
			<option value="sb">Solomon Islands</option>
			<option value="so">Somalia</option>
			<option value="za">South Africa</option>

			<option value="gs">South Georgia and the South Sandwich Islands</option>
			<option value="kr">South Korea</option>
			<option value="es">Spain</option>
			<option value="pi">Spratly Islands</option>
			<option value="lk">Sri Lanka</option>
			<option value="sd">Sudan</option>

			<option value="sr">Suriname</option>
			<option value="sj">Svalbard and Jan Mayen Islands</option>
			<option value="sz">Swaziland</option>
			<option value="se">Sweden</option>
			<option value="ch">Switzerland</option>
			<option value="sy">Syria</option>

			<option value="tw">Taiwan</option>
			<option value="tj">Tajikistan</option>
			<option value="tz">Tanzania</option>
			<option value="th">Thailand</option>
			<option value="tg">Togo</option>
			<option value="tk">Tokelau</option>

			<option value="to">Tonga</option>
			<option value="tt">Trinidad and Tobago</option>
			<option value="tn">Tunisia</option>
			<option value="tr">Turkey</option>
			<option value="tm">Turkmenistan</option>
			<option value="tc">Turks and Caicos Islands</option>

			<option value="tv">Tuvalu</option>
			<option value="ug">Uganda</option>
			<option value="ua">Ukraine</option>
			<option value="ae">United Arab Emirates</option>
			<option value="uk">United Kingdom</option>
			<option value="xd">United Nations Neutral Zone</option>

			<option value="us">United States</option>
			<option value="um">United States Minor Outlying Islands</option>
			<option value="uy">Uruguay</option>
			<option value="vi">US Virgin Islands</option>
			<option value="uz">Uzbekistan</option>
			<option value="vu">Vanuatu</option>

			<option value="va">Vatican City</option>
			<option value="ve">Venezuela</option>
			<option value="vn">Vietnam</option>
			<option value="wf">Wallis and Futuna Islands</option>
			<option value="eh">Western Sahara</option>
			<option value="ye">Yemen</option>

			<option value="zm">Zambia</option>
			<option value="zw">Zimbabwe</option>
			<option value="rs">Serbia</option>
			<option value="me">Montenegro</option>
		</select>
		</div>';
	}
	
	public static function is_available($url, $timeout = 30) {
		$ch = curl_init(); // get cURL handle
	
		// set cURL options
		$opts = array(CURLOPT_RETURNTRANSFER => true, // do not output to browser
					  CURLOPT_URL => $url,            // set URL
					  CURLOPT_NOBODY => true, 		  // do a HEAD request only
					  CURLOPT_TIMEOUT => $timeout);   // set timeout
		curl_setopt_array($ch, $opts); 
	
		curl_exec($ch); // do it!
	
		$retval = curl_getinfo($ch, CURLINFO_HTTP_CODE) == 200; // check if HTTP OK
	
		curl_close($ch); // close handle
	
		return $retval;
	}
	

	
}
