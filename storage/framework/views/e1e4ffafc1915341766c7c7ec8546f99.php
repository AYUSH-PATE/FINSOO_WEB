<?php 
$con=mysqli_connect("localhost","u727192562_finssocrmuser","UnS>5o2Fd;9","u727192562_finssocrm");
if(!$con){
	die("Failed to Establish Database Connection");

}

function check_input($con, $data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  $data = addslashes($data);
  $data = mysqli_real_escape_string($con, $data);
  return $data;
}
date_default_timezone_set("Asia/Kolkata"); ?><?php /**PATH C:\xampp\htdocs\Finsso\resources\views/Layouts/connect.blade.php ENDPATH**/ ?>