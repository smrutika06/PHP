<?php

$a=20;
$b=40;

if($a == 20 && $b == 40){
  echo "In && oprator want to true both condition";
}
echo "</br>";
if($a == 20 || $b == 40){
    echo "In || oprator want to true both or one condition";
  }
  echo "</br>";

  if($a == 20  or  $b == 40){
    echo "In or oprator want to true both or one condition";
  }
  echo "</br>";

  if($a == 20 and $b == 40){
    echo "In && oprator want to true both condition";
  }
  echo "</br>";
  if($a == 20 xor $b == 20){
    echo "In && oprator want to only one condition want satisfied another both are true then it is false condition";
  }
echo "</br>";
if($a != 200){
  echo "In != operator we print any thing without 20";
}

?>