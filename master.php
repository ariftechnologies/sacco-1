<?php
session_cache_expire(1);
session_start();// NEVER FORGET TO START THE SESSION!!!
$inactive = 3600;
if(isset($_SESSION['start']) ) {
$session_life = time() - $_SESSION['start'];
if($session_life > $inactive){
header("Location: logout.php");
}
}
$_SESSION['start'] = time();
include('config.php');
if (!session_is_registered('username')) {
	# code...
	header("location:index.php");
}
$username=$_SESSION['username'];
$get_uname=mysql_query("SELECT * FROM admin WHERE uname='$username'");
$match_value=mysql_fetch_array($get_uname);
$username=$match_value['uname'];
?>
<!DOCTYPE html>
<html>
<head>
	<title> sacco management system</title>
	<?php include ('config.php'); ?>
	<link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body background="images/background1.gif">

	<img src="images/logo1.jpg" height="150" width="150" id="logo">
	
		<h2>Latech Sacco Management System</h2>

		<div id="logout">
			hi <?php echo $username;?> <a href="logout.php">logout</a>
		</div>
	<div id="header">
	<nav>
		<ul>
			<li><a href="#"> Manage Accounts</a>
			<ul>
				<li><a href="#">Add New Member</a></li>
				<li><a href="update.php">Update Accounts</a></li>
			</ul>
			</li>			
			<li>
				<a href="#">Statistics</a>
				<ul>
					<li><a href="#">Individual Payment</a></li>
					<li><a href="#">Account Statistics</a></li>
					<li><a href="#">Borrowed Loans</a></li>
				</ul>
			</li>
			<li>
				<a href="#">Loans</a>
				<ul>
					<li><a href="#">Lend Money</a></li>
					<li><a href="#">Pay Loan</a></li>
				</ul>
			</li>
			<li><a href="#">About Us</a></li>
			<li><a href="#">Contact Us</a></li>
			<li><a href="#">Terms And Conditions</a></li>
			<li><a href="#"></a></li>
		</ul>
	</nav>		
</div>
<br>
	<div id="vert">
		<div class="button"><a href="update.php">Home</a></div>
	
		<div class="button"><a href="#">Add New Member</a></div>
		
		<div class="button"><a href="#">Individual Payment</a></div>
		
		<div class="button"><a href="#">Account Statistics</a></div>
		
		<div class="button"><a href="#">Lend Money</a></div>
		
		<div class="button"><a href="#">Pay Loans</a></div>
		
		<div class="button"><a href="#">Borrowed Loans</a></div>
	</div>	
</body>
</html>
