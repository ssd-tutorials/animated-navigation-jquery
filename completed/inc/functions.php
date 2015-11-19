<?php
$p = "home";
if(!empty($_GET)) {
	foreach($_GET as $key => $value) {
		${$key} = $value;	
	}
}
function active($val) {
	global $p;
	if($val == $p) {
		return " class=\"act\"";
	}
}
?>