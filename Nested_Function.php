<?php

$var='ABC';

function firstStmt(){
    $var='DFG';
    echo $var;
}

function nestedFun(){
   global $var;
    echo $var;
}
echo $var;
echo "<br>";
firstStmt();
echo "<br>";
nestedFun();
?>