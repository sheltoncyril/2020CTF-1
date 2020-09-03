<?php

// Dont put this behind a cloudflare reverse proxy , we will not be able to get the client's real IP
// we could use X-FORWARDED-FOR header but thats spoofable.
error_reporting(0);
include '../common/template.php';

show_html_head("Not The Usual IP");

try{
 $clientip	= $_SERVER['REMOTE_ADDR'];
 $country	= check_country($clientip);
 if($country != 'IN' && $country != NULL ){  // checking for NULL prevents flag revelation when visited from localhost

 	// not indian IP
    show_flag("NOT_THE_USUAL_IP");
 }
 
 else{

 ?>
   <!-- html start -->

   <span> Indian IP not allowed </span>

   <!-- html end -->

<?php
 
 }
} 
catch (Exception $e){
	die("Oops : this challenge is experiencing problems , contact CTF organizers, ERROR CODE : 01");
}


function check_country($ip){

 	$result = "";

 	try{
 		// fetch country details in json format
    	$result = file_get_contents("http://ip-api.com/json/".$ip."?fields=status,countryCode");
    }
    catch (Exception $e){
    		// this shouldnt be happening, probable IP BAN
    	   die("Oops : this challenge is experiencing problems , contact CTF organizers, ERROR CODE : 02");
    }

    // check if we recieved valid json
    try{

    	$details = json_decode($result);
    	if($details->status=='success'){
    		return($details->countryCode);
    	}
    	else{
    		// we ran out of ip-api.com requests (45/min), using ipinfo.io
    		 	try{
 					// fetch country details in json format
    				$result = file_get_contents("http://ipinfo.io/".$ip."?token=fb081cd392e0b9");
    				try{
    					$details = json_decode($result);
    					return($details->country);
    				}
    				catch (Exception $e){
    					// bad json
    					die("Oops : this challenge is experiencing problems , contact CTF organizers, ERROR CODE : IPINFO-03");
    				}
    			}
    			catch (Exception $e){
    				// this shouldnt be happening, probable IP BAN
    	   			die("Oops : this challenge is experiencing problems , contact CTF organizers, ERROR CODE : IPINFO-02");
    			}
    	}

    }
    catch (Exception $e){
    	die("Oops : this challenge is experiencing problems , contact CTF organizers, ERROR CODE : 03");
    }

 }
show_html_foot();

?>