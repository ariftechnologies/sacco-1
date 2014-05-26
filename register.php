<?php
include ('master.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<?php 
		if ($_SERVER['REQUEST_METHOD']=='POST') {
			
		}
	?>
</head>
<body>
	<div class="register">
		<form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
		Name: <input type="text">
       
	</form>
	</div>	
</body>
</html>
<?php include ('footer.php');