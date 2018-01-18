<?php
$mysql_data["user"] = $mysql_user;
$mysql_data["pass"] = $mysql_pass;
$mysql_data["host"] = $mysql_host;
$mysql_data["db"] = $mysql_db;


# MYSQL-I

$mysql_conn = mysqli_connect($mysql_data["host"], $mysql_data["user"], $mysql_data["pass"], $mysql_data["db"]) or die("SQL-CONNECTION FAILED!");
//$query = mysqli_query($mysql_conn,"SELECT * FROM categories WHERE pid=$pid ORDER BY sorter ASC") or die("COULD NOT RUN QUERY!");


# MYSQL
/*
$mysql_conn = mysql_connect($mysql_data["host"],$mysql_data["user"],$mysql_data["pass"]);
$mysql_conn_db = mysql_select_db("local",$mysql_conn);
$query = mysql_query( "SELECT * FROM homescripts_run WHERE run='1' ") or die(mysql_error());
*/

?>