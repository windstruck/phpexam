<?php
include 'connect.php';

$id = $_GET['id'];

$sql = " DELETE FROM member WHERE id = $id ";
$result = mysql_query($sql);
if($result){
	echo 'complete';
}else {
	echo 'error';
}
?>
<br>
<a href="index.php">Home</a>