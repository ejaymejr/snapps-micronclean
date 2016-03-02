<?php
//use_helper('javascript');

sfLoader::loadHelpers(array('Url', 'Text','Javascript'));
echo javascript_tag('
anylinkmenu.init("menuanchorclass")


var anylinkmenu1={divclass:"anylinkmenu", inlinestyle:"", linktarget:""} //First menu variable. Make sure "anylinkmenu1" is a unique name!
anylinkmenu1.items=[
	["Dynamic Drive", "http://www.dynamicdrive.com/"],
	["CSS Drive", "http://www.cssdrive.com/"],
	["JavaScript Kit", "http://www.javascriptkit.com/"],
	["Coding Forums", "http://www.codingforums.com/"],
	["JavaScript Reference", "http://www.javascriptkit.com/jsref/"] //no comma following last entry!
]

');



?>
<p><a href="http://www.dynamicdrive.com" class="menuanchorclass" rel="anylinkmenu1">Default Example</a></p>
