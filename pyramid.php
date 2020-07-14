<?php
 

mkPyramid(5);
mkPyramid2(2);

function mkPyramid($n){
    echo "<pre>";
    for($i = 1 ; $i<= $n ; $i++){
        for($j = 1 ; $j <= $n-$i ; $j++){
            echo "X";
        }
        for($k = 1 ; $k <= $i ;$k++){
            echo "*O";
        }
        echo "<br>";
    }
    echo "</pre>";
}

function mkPyramid2($n){
    for ($i = 1 ; $i <= $n ;$i++){
        for($j = 1 ;$j <= $n - $i ; $j++){
            echo "&nbsp;&nbsp;";
        }
        for($k = 1 ;$k <= $i ; $k++){
            echo "*&nbsp;&nbsp;";
        }
        
        echo "<br>";
    }
}
?>