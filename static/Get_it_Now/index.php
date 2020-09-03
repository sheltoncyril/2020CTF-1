<?php

include '../common/template.php';

error_reporting(0);
show_html_head("Get It Now");

?>
<div>
This is the form
<form action="Get_it_Now/request.php" method="POST">
<input id="data" name="data" value="data" placeholder="enter something here" style="width: 175px;"><br>
<input type="submit" value="send request" style="margin-left: 30px;">
</form>
</div>

<?php
show_html_foot();
?>