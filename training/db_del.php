<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv=Content-Type content="text/html; charset=tis-620">
<title>Untitled Document</title>
</head>

<body>
<h1>ทดสอบลบฐานข้อมูล</h1>
<?php 
	$host = 'localhost';
	$user = 'root';
	$pass = 'qwerty';
	$db_name = 'training';

        $conn = mysql_connect($host ,$user ,$pass) or die('Cannot connect server.');
        mysql_select_db($db_name) or die ('Cannot select database'); 
		        // กรณีที่กำหนด Collation อื่น ๆ ให้ใช้
        mysql_query("SET character_set_results=tis620");
		mysql_query("SET character_set_client=tis620");
		mysql_query("SET character_set_connection=tis620");
		
		$sql = " Select * from test ";
		$result = mysql_query($sql);
		
		$url = (!empty($_SERVER['HTTPS'])) ? "https://".$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'] : "http://".$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI']; //  url ปัจจุบัน
?>

<table border="1" width="300">
<?php while($data = mysql_fetch_array($result)) { ?>
	<tr>
		<td>
		<?php echo $data['name'].'<br />';	 ?>
		</td>
		<td width="50">
		<a href="db_del_process.php?id=<?php echo $data['id']; ?>&redir=<?php echo $url; ?>">ลบ</a>
		</td>
	</tr>
<?php } ?>
</table>
</body>
</html>
