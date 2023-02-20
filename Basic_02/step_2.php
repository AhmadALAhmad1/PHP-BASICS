<?php

function Greater($number) {
    if ($number > 30) {
        echo "The number is greater than 30.";
    } elseif ($number > 20) {
        echo "The number is greater than 20.";
    } elseif ($number > 10) {
        echo "The number is greater than 10.";
    } else {
        echo "The number is not greater than 10.";
    }
}

Greater(5); 
Greater(15);
Greater(25); 
Greater(35); 

?>