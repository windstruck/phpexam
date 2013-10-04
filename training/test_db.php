<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv=Content-Type content="text/html; charset=tis-620">
<title>Untitled Document</title>
</head>

<body>
<h1><?php echo 'ทดสอบฐานข้อมูล'; ?></h1>
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
		//$result1 = mysql_query($sql);
		
		/*
		while($data = mysql_fetch_array($result)) {
				echo $data['name'].'<br />';	
		}*/
		
		/*
		$numrow = @mysql_num_rows($result);
		for($i = 0; $i < $numrow; $i++) {
		$result1 = mysql_result($result, $i , 'name');
		echo $result1.'<br />';
		}*/

				
?>
<p>
<h2>แบบที่ 1 </h2>
<table border="1" width="300">
<?php while($data = mysql_fetch_array($result)) { ?>
	<tr>
		<td>
		<?php echo $data['name'].'<br />';	 ?>
		</td>
	</tr>
<?php } ?>
</table>
</p>

<?php  
$numrow = @mysql_num_rows($result);
?>
<p>
<h2>แบบที่ 2 </h2>
<table border="2" width="300">
<?php for($i = 0; $i < $numrow; $i++) { ?>
	<tr>
		<td>
		<?php
		$result1 = mysql_result($result, $i , 'name');
		echo $result1.'<br />';
		?>
		</td>
	</tr>
<?php } ?>
</table>
</p>

</body>
<?php mysql_close($conn); ?>
</html>
