<?php

function armstrongCheck($number){
	$sum = 0;
	$x = $number;
	while($x != 0)
	{
		$rem = $x % 10;
		$sum = $sum + $rem*$rem*$rem;
		$x = $x / 10;
	}
	
	// if true then armstrong number
	if ($number == $sum)
		return 1;
	
	// not an armstrong number
	return 0;
}


$number = 153;
$flag = armstrongCheck($number);
if ($flag == 1)
	echo "Yes, armstrong number\n";
else
	echo "No\n"
?>



