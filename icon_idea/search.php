<?php

include 'connect.php';

@$name = $_POST['name'];
@$lname = $_POST['lname'];
@$sex = $_POST['sex'];
@$prov = $_POST['prov'];
@$tel = $_POST['tel'];

@$start = $_REQUEST['start'];

if(!isset($start)){
	$start = 0;
}
$limit = '10'; // แสดงผลหน้าละกี่หัวข้อ

if ($name) {
	$q_string = "name = '".$name."'";
}elseif ($lname){
	$q_string = "lname = '".$lname."'";
}elseif ($sex){
	$q_string = "sex = $sex";
}elseif ($prov){
	$q_string = "prov = '".$name."'";
}elseif ($tel){
	$q_string = "tel = $tel";
}

if ($name || $lname || $sex || $prov || $tel) {
	$Qtotal = mysql_query("select * from member where $q_string "); //คิวรี่ คำสั่ง
	$total = mysql_num_rows($Qtotal); // หาจำนวน record
	
	/* คิวรี่ข้อมูลออกมาเพื่อแสดงผล */
	$Query = mysql_query("select * from member where $q_string ORDER BY id LIMIT $start,$limit"); //คิวรี่คำสั่ง
	$totalp = mysql_num_rows($Query); // หาจำนวน record ที่เรียกออกมา
}else{
	/* หาจำนวน record ทั้งหมด
	 ปล. อันนี้ต้องใช้กับตัวแบ่งนะ ห้ามเอาออก*/
	$Qtotal = mysql_query("select * from member"); //คิวรี่ คำสั่ง
	$total = mysql_num_rows($Qtotal); // หาจำนวน record
	
	/* คิวรี่ข้อมูลออกมาเพื่อแสดงผล */
	$Query = mysql_query("SELECT * FROM member ORDER BY id LIMIT $start,$limit"); //คิวรี่คำสั่ง
	$totalp = mysql_num_rows($Query); // หาจำนวน record ที่เรียกออกมา
}


/* วนลูปข้อมูล */
/* while($arr = mysql_fetch_array($Query)){
	echo '<pre>';
	echo print_r($arr);
	echo '</pre>';
}
exit; */
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf8" />
<title>insert data</title>
<script type="text/javascript" src="jquery.min.js"></script>
<script type="text/javascript" src="jquery.validate.js"></script>

<script type="text/javascript">
$(function(){

});
</script>


</head>

<body>
<a href="insert_form.php">Insert data</a>
<br />
<table border="1" width="100%">
	<tr>
		<td>id</td>
		<td>name</td>
		<td>lname</td>
		<td>sex</td>
		<td>provience</td>
		<td>tel</td>
	</tr>
	
	<?php while($data = mysql_fetch_array($Query)) { ?>
	
	<tr>
		<td>
		<?php echo $data['id'].'<br />'; ?>
		</td>
		<td>
		<?php echo $data['name'].'<br />'; ?>
		</td>
		<td>
		<?php echo $data['lname'].'<br />'; ?>
		</td>
		<td>
		<?php
		if ($data['sex'] == 1) {
			echo 'male';
		}else {
			echo 'female';
		}
		echo '<br />'; ?>
		</td>
		<td>
		<?php echo $data['prov'].'<br />'; ?>
		</td>
		<td>
		<?php echo $data['tel'].'<br />'; ?>
		</td>
		<td><a href="update_form.php?id=<?php echo $data['id']; ?>">Update name</a></td>
		<td><a href="delete.php?id=<?php echo $data['id']; ?>">Delete</a></td>
	</tr>
	<?php } ?>
</table>

<?php 

/* ตัวแบ่งหน้า */
$page = ceil($total/$limit); // เอา record ทั้งหมด หารด้วย จำนวนที่จะแสดงของแต่ละหน้า

/* เอาผลหาร มาวน เป็นตัวเลข เรียงกัน เช่น สมมุติว่าหารได้ 3 เอามาวลก็จะได้ 1 2 3 */
for($i=1;$i<=$page;$i++){
	if(@$_GET['page']== $i){ //ถ้าตัวแปล page ตรง กับ เลขที่วนได้
		echo "[<a href='?start=".$limit*($i-1)."&page=$i'><B>$i</B></A>]"; //ลิ้งค์ แบ่งหน้า เงื่อนไขที่ 1
	}else{
		echo "[<a href='?start=".$limit*($i-1)."&page=$i'>$i</A>]"; //ลิ้งค์ แบ่งหน้า เงื่อนไขที่ 2
	}
}

?>
<hr>

<form class="cmxform" id="athapong" method="post" action="">
 <fieldset>
   <legend>Search</legend>
   <p>
     <label for="cname">name</label>
     <input id="cname" name="name" size="25" />
   </p>
   <p>
     <label for="clname">last name</label>
     <input id="clname" name="lname" size="25" />
   </p>
   <p>
     <label for="csex">sex</label>
     <input id="csex" name="sex" type="radio" value="1" />male
     <input id="csex" name="sex" type="radio" value="2" />female
   </p>
   <p>
     <label for="cprov">Province</label>
     <input id="cprov" name="prov" size="25" minlength="2" />
   </p>
   <p>
     <label for="ctel">Tel.</label>
     <input id="ctel" name="tel" size="25" minlength="10" />
   </p>
  <p>
     <input class="submit" type="submit" value="Submit"/>
   </p>
 </fieldset>
 </form>
 
 <a href="index.php">Home</a>
</body>
</html>