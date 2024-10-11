<?php
$n=4;
for($i=0; $i<$n; $i++){
    for($j=0; $j<$n-$i-1; $j++){
      echo "<\v>";
    }
    echo "*";
    if($i!=0){
        for($j=0; $j<$i+1; $j++){
            echo "<\v>";
        }
        echo "*";
    }
    echo "</br>";
}

?>