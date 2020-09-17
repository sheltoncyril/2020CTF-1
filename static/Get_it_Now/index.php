<?php

include '../common/template.php';

error_reporting(0);
show_html_head("Get It Now");

?>
<div>
This is the form
<form action="request.php" method="POST">
<input type="text" id="data" name="data" value="data" placeholder="enter something here" ><br>
<input type="submit" value="send request">
</form>
</div>

<?php
show_html_foot();
?>