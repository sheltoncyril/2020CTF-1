<?php

	/*	
		Templating Engine for challenges
	*/

	include 'config.php';
	include 'flags.php'; 


 	function show_html_head($cname){

 		$parts =    '<!DOCTYPE html><html lang="en"><head><meta charset="UTF-8">
                    <meta name="viewport" content="width=device-width, initial-scale=1.0">
                    <link rel="stylesheet" href="/common/template/style.css">
                    <title>';

    	$parts .= 	$cname;

    	$parts .=	'</title></head><body><div class="container"><header><div class="heading"><p>';

    	$parts .=	$cname;

    	$parts .=	'</p></div></header><main>';

    	echo $parts; 
 	}

 	function show_html_foot(){
 		$fpart = '</main><footer><div class="foot-note"><a href="';

 		$fpart .= $GLOBALS['ctf_url'];

		$fpart .= '">Back to challenge site</a></div></footer></div></body></html>';

		echo $fpart;
 	}

    function show_flag($chal_code){
        
        global $FLAG_ARRAY;
        
        try{
            echo $FLAG_ARRAY[$chal_code];        
        }
        catch (Exception $e){
            // this block will be hit when a wrong challenge code is passed
            echo "hmm the flag is missing";
        }


    }

    function return_flag($chal_code){
        
        global $FLAG_ARRAY;
        return $FLAG_ARRAY[$chal_code];        
         
    }

?>