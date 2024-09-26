<?php
$n=4;
for($i=0; $i<$n; $i++){
    for($j=0; $j<$i+1; $j++){
        echo "* ";
    }
    if($i!=$n){
        for($j=0; $j<2*($n-$i)-2; $j++){
            echo "\v";
        }
        for($j=0; $j<$i+1; $j++){
            echo "* ";
        }
    }
        echo "</br>";
    }

//next section

for($i=0; $i<$n; $i++){
    for($j=0; $j<$n-$i; $j++){
        echo "* ";
    }
    if($i!=$n){
        for($j=0; $j<$i*2; $j++){
            echo "\v";
        }
        for($j=0; $j<$n-$i; $j++){
            echo "* ";
        }
        echo"</br>";
    }
   
}

?>