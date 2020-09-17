<?php


	include '../common/template.php';

	error_reporting(0);
	
	show_html_head("Git Raid");

	if(isset($_REQUEST['password'])){

		if(md5($_REQUEST['password'])=="02c75fb22c75b23dc963c7eb91a062cc"){
				show_flag('GIT_RAID');
		}
		else{
				echo '<main><div style="margin-left: 60px;"> Log In </div>
			  	<form action="index.php" method="POST">
  		  		<input type="text" name="username" placeholder="username" value="admin" required><br>
  		  		<input type="text" name="password" placeholder="password" required><br>
  		  		<input type="submit" value="submit" style="margin-left: 70px;">
  		  		</form></main><br><div style="margin-left: 40px;">
				<h6 style="font-size: 20px; color: rgb(201, 124, 124); "><span> Bad password </span></h6>
				</div><!-- https://github.com/sjcctf/git_raid_code -->';

		}
	}
	else{
			echo '<main><div style="margin-left: 60px;"> Log In </div>
			  	<form action="index.php" method="POST">
  		  		<input type="text" name="username" placeholder="username" value="admin" required><br>
  		  		<input type="text" name="password" placeholder="password" required><br>
  		  		<input type="submit" value="submit" style="margin-left: 70px;">
  		  		</form></main><!-- https://github.com/sjcctf/git_raid_code -->';
  	}


	show_html_foot();

?>

