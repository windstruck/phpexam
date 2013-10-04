<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-874" />
<title>Untitled Document</title>
</head>

<body>
<?php
$link = mysql_connect('localhost', 'root', 'qwerty');
if ($link) {
echo "Connected Success <br />";
echo $link;
mysql_close($link);
} else {
die('not Connect:'.mysql_error());
}

?>
</body>
</html>
