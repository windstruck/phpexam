<?php

include 'connect.php';

$id = $_POST['id'];
$name = $_POST['name'];

$sql = " UPDATE member set name = '".$name."' WHERE id = $id ";

$result = mysql_query($sql);
if($result){
	echo 'complete';
}else {
	echo 'error';
}
?>
<br>
<a href="index.php">Home</a>