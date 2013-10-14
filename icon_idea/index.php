<?php 

include 'connect.php';

$sql = " Select * from member ";
$result = mysql_query($sql);

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
<hr>

<table border="1" width="100%">
	<tr>
		<td>id</td>
		<td>name</td>
		<td>lname</td>
		<td>sex</td>
		<td>provience</td>
		<td>tel</td>
	</tr>
	
	<?php while($data = mysql_fetch_array($result)) { ?>
	
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

<hr>
<a href="search.php">Search</a>
<hr>

<a href="delete_all.php">Delete All Data</a>
</body>
</html>