<?php

// sets a custom cookies thats all 

	include '../common/template.php';

	error_reporting(0);
	$cookie_name = "youfoundit";
	$cookie_value = return_flag('FLAG_AMONG_COOKIES');  /* please note : "{" character will be escaped in browser and will be shown as "%7B" */
	setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");

	show_html_head("Flag Among Cookies");
	echo "oops no flag here";
	show_html_foot();

?>

