<?php

include '../common/template.php';

error_reporting(0);

show_html_head("Get It Now");
	
	if(isset($_POST['data'])){

?>

   <!-- html start -->

   <span>  POST not allowed  </span>

   <!-- html end -->


<?php				

	}else


	if(isset($_GET['data']))
	{
		
		show_flag('GET_IT_NOW');

	}
	else{
?>


   <!-- html start -->

   <span> you did not send the  required GET data  </span>

   <!-- html end -->



<?php

	}
show_html_foot();
?>
