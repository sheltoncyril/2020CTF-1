<?php

	include '../common/template.php';


/*
	This script checks for a the word "Waterfox" (Mind the capital 'W' )in the useragent sent by the browser
	On match returns the flag
*/
error_reporting(0);

show_html_head("Agent Incorrect");

	if(isset($_SERVER['HTTP_USER_AGENT'])){
		$uagent =  $_SERVER['HTTP_USER_AGENT'];
		if(strlen(strstr($uagent,"Waterfox")) > 0 ){
			// its 	Water fox , yeaaahhh <- this sentence was inspired by arun
			show_flag("AGENT_INCORRECT");		
		}  
		else{
?>


<!-- html start-->

	<center><span> Incorrect user agent </span></center>
	

<!-- html end-->


<?php
		}

	}
	else{
?>

<!-- html start-->

	<center><span> your browser did not send a user agent</span></center>
	

<!-- html end-->


<?php		
	} // end of else

show_html_foot();
?>