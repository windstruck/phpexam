<?php
	$host = 'localhost';
	$user = 'root';
	$pass = 'qwerty';
	$db_name = 'training';
	$id = $_GET['id'];

        $conn = mysql_connect($host ,$user ,$pass) or die('Cannot connect server.');
        mysql_select_db($db_name) or die ('Cannot select database'); 
		        // กรณีที่กำหนด Collation อื่น ๆ ให้ใช้
        mysql_query("SET character_set_results=tis620");
		mysql_query("SET character_set_client=tis620");
		mysql_query("SET character_set_connection=tis620");
		
		$sql = " DELETE FROM test WHERE id = $id ";
		mysql_query($sql);
		
		$redir = $_GET['redir'];
		header("Location: $redir"); // set redirect
?>