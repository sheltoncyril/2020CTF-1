<?php
include '../common/template.php';

error_reporting(0);
	
	if(isset($_GET['gimme'])){

		show_flag("THE_INTERCEPTOR");		

	}else{
	
	echo "Oops: Browser Was Supposed to send me something";
	}
?>
