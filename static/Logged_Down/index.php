<?php


	include '../common/template.php';

	error_reporting(0);
	
	show_html_head("Logged Down");

	if(isset($_REQUEST['password'])){
		if($_REQUEST['password']=="wertzkurg"){
				show_flag('LOGGED_DOWN');
		}
		else{
				echo '<main><div style="margin-left: 60px;"> Log In </div>
			  	<form action="index.php" method="POST">
  		  		<input type="text" name="username" placeholder="username" value="admin" required><br>
  		  		<input type="text" name="password" placeholder="password" required><br>
  		  		<input type="submit" value="submit" style="margin-left: 70px;">
  		  		</form></main><br><div style="margin-left: 40px;">
				<h6 style="font-size: 20px; color: rgb(201, 124, 124); "><span> Bad password </span></h6>
				</div>';

		}
	}
	else{
			echo '<main><div style="margin-left: 60px;"> Log In </div>
			  	<form action="index.php" method="POST">
  		  		<input type="text" name="username" placeholder="username" value="admin" required><br>
  		  		<input type="text" name="password" placeholder="password" required><br>
  		  		<input type="submit" value="submit" style="margin-left: 70px;">
  		  		</form></main>';
  	}


	show_html_foot();

?>

