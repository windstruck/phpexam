<?php
include 'connect.php';

$sql = " DELETE FROM member ";
$result = mysql_query($sql);
if($result){
	echo 'complete';
}else {
	echo 'error';
}
?>
<br>
<a href="index.php">Home</a>