<?php
$host = 'localhost';
$user = 'root';
$pass = '1234';
$db_name = 'athapong';

$conn = mysql_connect($host ,$user ,$pass) or die('Cannot connect server.');
mysql_select_db($db_name) or die ('Cannot select database');