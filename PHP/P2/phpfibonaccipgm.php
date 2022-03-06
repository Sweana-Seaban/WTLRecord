<?php
	$n=$_POST['number'];
	$n1=0;
	$n2=1;
	$n3=0;
	echo "Fibonacci series up to $n is:\n";
	echo $n1.' '.$n2.' ';
	while($n3<$n)
	{
		$n3=$n1+$n2;
		if($n3<$n) 
		echo "$n3 ";
		$n1=$n2;
		$n2=$n3;
	}
?>

