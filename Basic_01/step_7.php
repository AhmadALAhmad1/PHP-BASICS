<?php
$birth_year = rand(1980, 2018);
$current_year = date('Y');
$age = $current_year - $birth_year;

if ($age >= 18) 
{
    echo "You can drive";
} 
else 
{
    echo "You're still a kid, go and play GTA";
}

?>