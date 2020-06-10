<?php
function compare($a,$b) {
    if ($a > 0 and $b >0){
        echo $result = $a - $b;
    }
    elseif($a < 0 and $b < 0 ){
        echo $result = $a * $b;
    }
    elseif($a < 0 xor $b < 0 ){
        echo $result = $a + $b;
    }
    return $result;

}
compare(10,5);
compare(-10,5);
compare(-10,-5);


?>