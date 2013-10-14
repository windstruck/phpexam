<?php

include 'connect.php';

$name = $_POST['name'];
$lname = $_POST['lname'];
$sex = $_POST['sex'];
$prov = $_POST['prov'];
$tel = $_POST['tel'];

// check ข้อมูลซ้ำ
$sql = " Select * from member where name = '".$name."'";
$result = mysql_query($sql);
@$text = mysql_result($result, 0, 'name');
if ($text == $name) {
	echo 'Duplicates Data please re-input data <br />';
	echo " <a href=\"index.php\">Home</a> ";
	exit;
}


$sql = " INSERT INTO member (id, name, lname, sex, prov, tel) VALUES (NULL, \"$name\", \"$lname\", \"$sex\", \"$prov\", \"$tel\") ";
$check_q = mysql_query($sql);
if($check_q) {
echo 'Insert data complete'.'<br />';
echo " <a href=\"index.php\">Home</a> ";
} else {
echo 'Error';
}