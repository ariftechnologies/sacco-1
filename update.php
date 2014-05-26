<?php
include('master.php');
?>


<!DOCTYPE html>
<html>
<head>
	<title>update records</title>
	<link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>

<div id="update">
	<table border="1" width="900" cellpadding="10">
		
		<tr>
			<th>No</th>
			<th>Name</th>
			<th>Phone</th>
			<th>Proposed Amount</th>
			<th>Last Paid</th>
			<th>Paid Amount</th>
			<th>Balance</th>
			<th>Contribution</th>
			<th>Kitty Total</th>
			<th>Action</th>
		</tr>
		<?php
		$count=0;
	$result=mysql_query("SELECT * FROM uaccounts order by lastPaid");
	while ($row=mysql_fetch_array($result)) {
		$count=$count+1;
	echo "<tr>";
		echo "<td>" . $count. "</td>";
		echo "<td>" . $row['name'] . "</td>";
		echo "<td>" . $row['phoneNo'] . "</td>";
		echo "<td>" . $row['propAmount'] . "</td>";
		echo "<td>" . $row['lastPaid'] . "</td>";
		echo "<td>" . $row['paidAmount'] . "</td>";
		echo "<td>" . $row['balance'] . "</td>";
		echo "<td>" . $row['indTotal'] . "</td>";
		echo "<td>" . $row['total'] . "</td>";
		echo "<td><a href=\"delete.php?phoneNo=".$row['phoneNo']."\">delete</a></td>";
	echo "<tr>";
}
	?>
	</table>

</div>
<div class="right-section">
<?php
	$query=mysql_query("SELECT * FROM uaccounts ORDER BY lastPaid DESC LIMIT 1");
	$result=mysql_fetch_array($query);
	$total=$result['total'];
	echo "GRAND TOTAL: Ksh. ".$total;
	?>
	
</div>
</body>
</html>
<?php include ('footer.php');?>
