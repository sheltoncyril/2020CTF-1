<?php
$cookie_name = "youfoundit";
$cookie_value = "flag{crum_bled_cookies}";  /* please note : "{" character will be escaped in browser and will be shown as "%7B" */
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
// sets a custom cookies thats all 

	include '../common/template.php';

	show_html_head("Flag Among Cookies");
	echo "oops no flag here";
	echo "<!-- no flag here either -->";
	show_html_foot();

?>

