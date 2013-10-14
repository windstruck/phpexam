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

<form class="cmxform" id="athapong" method="post" action="insert.php">
 <fieldset>
   <legend>Insert Form</legend>
   <p>
     <label for="cname">name</label>
     <em>*</em><input id="cname" name="name" size="25" class="required" minlength="2" />
   </p>
   <p>
     <label for="clname">last name</label>
     <em>*</em><input id="clname" name="lname" size="25" class="required" minlength="2" />
   </p>
   <p>
     <label for="csex">sex</label>
     <em>*</em><input id="csex" name="sex" type="radio" class="required" value="1" />male
     			<input id="csex" name="sex" type="radio" class="required" value="2" />female
   </p>
   <p>
     <label for="cprov">Province</label>
     <em>*</em><input id="cprov" name="prov" size="25" class="required" minlength="2" />
   </p>
   <p>
     <label for="ctel">Tel.</label>
     <em>*</em><input id="ctel" name="tel" size="25" class="required" minlength="10" />
   </p>
  <p>
     <input class="submit" type="submit" value="Submit"/>
   </p>
 </fieldset>
 </form>
 
 <a href="index.php">Home</a>
</body>
</html>