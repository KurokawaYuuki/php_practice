<?php
echo 'sum.php!'."\n";


/*引数に数値を指定して実行すると、数値を2倍にして返す関数を作成してください*/
function sum($max) {
    $result = 0;
    for($i = 1;$i <= $max;$i++){
        $result += $i;
    }
    
    return $result;
}

echo sum(100);