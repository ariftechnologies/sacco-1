<?php
//Connection to the MySQL Server by - tutbuzz.com
define('DB_SERVER', '127.0.0.1'); // Mysql hostname, usually localhost
define('DB_USERNAME', 'root'); // Mysql username
define('DB_PASSWORD', 'root1'); // Mysql password
define('DB_DATABASE', 'sacco'); // Mysql database name
$connection = mysql_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD) or die(mysql_error());
$database = mysql_select_db(DB_DATABASE) or die(mysql_error());
// $create_table_test="CREATE TABLE IF NOT EXISTS Testing (name varchar (30) not null);";
// if(mysql_query($create_table_test)){
// 	echo "success";
// }
// else{
// 	echo mysql_error();
// }

?>
