<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-874" />
<title>Untitled Document</title>
</head>

<body>
<table border="1" width="200">
<?php for($i = 1;$i <= $row; $i++) { ?>
	<tr>
			<?php for($j = 1; $j <= $col; $j++) { ?>
			<td>
			<?php echo $i.':'.$j; ?>
			</td>
			<?php } ?>
	</tr>
<?php } ?>
</table>
<span>My name is : <a href="namex.php?namey=<?php echo $namex; ?>" ><?php echo $namex; ?></a></span>

</body>
</html>
