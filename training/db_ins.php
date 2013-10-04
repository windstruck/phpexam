<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv=Content-Type content="text/html; charset=tis-620">
<title>Untitled Document</title>
</head>

<body>
<?php
	$host = 'localhost';
	$user = 'root';
	$pass = 'qwerty';
	$db_name = 'training';
	$data = $_POST['add_data'];

        $conn = mysql_connect($host ,$user ,$pass) or die('Cannot connect server.');
        mysql_select_db($db_name) or die ('Cannot select database'); 
		        // กรณีที่กำหนด Collation อื่น ๆ ให้ใช้
        mysql_query("SET character_set_results=tis620");
		mysql_query("SET character_set_client=tis620");
		mysql_query("SET character_set_connection=tis620");
		
		$sql = " INSERT INTO test (id, name) VALUES (NULL, \"$data\") ";
		$check_q = mysql_query($sql);
		if($check_q) {
			echo 'ทำการบันทึกลงฐานข้อมูลเรียบร้อยแล้ว'.'<br />';
			echo " <a href=\"test_db.php\">กลับหน้าทดสอบฐานข้อมูล</a> ";
		} else {
			echo 'ไม่สามารถบันทึกลงฐานข้อมูลได้';
		}
?>
</body>
</html>
