<!-- Local Variable -->

<?php

function getName(){       
    $n="Shrutika";     
    echo $n;
}
getName();
?>

<br>
 <!-- Global Variable -->
<?php
 $n="Havaldar";  
function postName(){       
      }
echo $n;
postName();
?>
<br>
<br><br><br>


<!-- Local & Global in one line-->

<?php
$name="Sushant";
function letCode(){
    $name="Havaldar";
    echo $name;
    
}

echo $name;
echo "<br />";
letCode();
 

?>

<br><br>


<!-- Use only global variable -->
<?php

$name="Shweta";
function loBal(){
    global $name;
    echo "Local var : $name";
}

echo $name;
echo "<br />";
loBal();

?>