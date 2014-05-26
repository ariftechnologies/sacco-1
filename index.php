<?php 
session_start();
include('config.php'); 
$errMsg="";
				if ($_SERVER['REQUEST_METHOD']=="POST") {
					# code...
					$username=$_POST['username'];
					$password=mysql_real_escape_string(stripslashes($_POST['password']));
					$sql="SELECT * FROM admin WHERE uname = '$username' AND password='$password'";
					$result=mysql_query($sql);
					$count=mysql_num_rows($result);
					if($count==1){
						session_register('username');
						$_SESSION['username']=$username;
						header("location:update.php");
					}
					else{
						$errMsg= "wrong username or password";
					}

				}
			?>
<!DOCTYPE html>
	<html>
		<head>
			<title>admin login</title>		
			<link rel="stylesheet" type="text/css" href="style.css" />
		</head>
		<body background="images/back.jpg">
		
		<center>
			<form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>">
			<fieldset>
				<legend>Administrator login</legend>
				Username:<input type="text" name="username" id="username" placeholder="enter username" required><br><br>
				Password: <input type="password" name="password" id="password" placeholder="enter password" required><br>
				<font color="red"> <?php echo $errMsg;?></font><br>
				<input type="Submit" value="LOGIN">
			</fieldset>
			
			</form>
		</center>
			
		</body>
	</html>
