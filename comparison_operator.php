<?php

$num1=30;
// $num2=40;
$num2="40";


//Using var_dump function It's gives us structure of program

//It's Only check the equal value
var_dump($num1==$num2);
//It's check the datatype and same value
var_dump($num1===$num2);
//It's check the value is less than or not
var_dump($num1<$num2);
//It's check the value is greater than or not
var_dump($num1>$num2);
//It's check value is not equall to given value
var_dump($num1!=$num2);
//It's check value is not equall to given value
var_dump($num1<>$num2);
//It's check greater than equal to have or not 
var_dump($num1>=$num2);
//It's check less than equal to have or not 
var_dump($num1<=$num2);
//Spaceship is  return integer value [value is < return -1/ value is equal then retrun 0/ value is greter than return 1]
var_dump($num1<=>$num2);
?>