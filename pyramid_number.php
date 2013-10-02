<?php


function pyramid(){
	for($s=1;$s<=100000;$s=($s*10)+1)
	
	{
	
		echo $s*$s.'</br>';
	
	}
}

echo '<center>';
pyramid();
echo '</center>';

echo '<hr>';


echo 'may style';
echo "<center>";
$a=1;
for($x=1;$x<=5;$x++)
{
	for($y=1;$y<=$a;$y++)
	{
		echo "$y";
}
echo "<br>";
$a=$a+2;
}
echo "</center>";