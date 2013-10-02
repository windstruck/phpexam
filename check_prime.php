<?php
/**
 * เอาไว้ตรวจสอบตัวเลขว่าเป็นจำนวนเฉพาะหรือเปล่า
 * 
 */

function isPrime($n)
{
	$i = 2;
 
	if ($n == 2) {
		return true;	
	}
 
	while ($i <= $n/2) {
		if ($n % $i == 0) {
			return false;
		}
		$i++;
	}
 
	return true;
}

/* if(isPrime(3)){
	echo 'is prime';
}else {
	echo 'not prime';
} */
if(isPrime($_POST['send_num'])){
	echo 'is prime';
}else {
	echo 'not prmie';
}
?>

<form method="post">
	<input type="text" name="send_num">
	<input type="submit" valut="submit">
</form>