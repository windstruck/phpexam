<?php
$id = $_GET['id'];

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
	$("#athapong").validate();
});
</script>

<style type="text/css">
* { font-family: Verdana; font-size: 96%; }
label { width: 10em; float: left; }
label.error { float: none; color: red; padding-left: .5em; vertical-align: top; }
p { clear: both; }
.submit { margin-left: 12em; }
em { font-weight: bold; padding-right: 1em; vertical-align: top; }
</style>

</head>

<body>

<form class="cmxform" id="athapong" method="post" action="update.php">
 <fieldset>
   <legend>Update Form</legend>
   <p>
     <label for="cname">name</label>
     <em>*</em><input id="cname" name="name" size="25" class="required" minlength="2" />
   </p>
  
  <p>
  	<input type="hidden" name="id" value="<?php echo $id; ?>" />
     <input class="submit" type="submit" value="Submit"/>
   </p>
 </fieldset>
 </form>

</body>
</html>