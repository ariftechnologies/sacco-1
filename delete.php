<?php
include ('config.php');
$phoneNo=$_GET['phoneNo'];
if (!empty($phone)) {
	$result=mysql_query("DELETE FROM uaccounts WHERE phoneNo=".$phoneNo.";");
}
header("location:update.php");
?>