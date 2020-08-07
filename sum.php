<?php
echo 'sum.php!'."\n";


/*引数に数値を指定して実行すると、数値を2倍にして返す関数を作成してください*/
function times2($num){
    return $num * 2;
}
echo times2(11);
echo "\n";

/*$a と $b を仮引数に持ち、　$a と $b　を足した結果を返す関数を作成してください。*/
function sum($a,$b){
    return $a + $b;
}
echo  sum(2,5);
echo "\n";

/*$arr という配列の仮引数を持ち、数値が入った配列array(1, 3, 5 ,7, 9) を渡すとその要素をすべてかけた結果を返す関数を作成してください。*/
$arr = array(1,3,5,7,9);
function multply($arr){
    $result = 1;
    foreach ($arr as $a){
        $result *= $a;
    }
    return $result;
}
echo multply($arr);
echo "\n";

/*【応用】　次のプログラムは、配列の中で1番大きい値を返す max_array という関数を実装しようとしています。途中の部分を完成させてください。*/
function max_array($arr){
// とりあえず配列の最初の要素を一番大きい値とする
 $max_number = $arr[0];
 foreach ($arr as $a){
 //どうしたらいいかわからない・・・・
    if ($max_number < $a){
        $max_number = $a;
    }
 }

 return $max_number;
 }
 
 echo max_array(array(1,2,3,4,55));
 echo "\n";
 
 
/*次のビルトイン関数の用途、使い方を調べて実際に使ってみてください。

strip_tags
array_push
array_merge
time, mktime
date*/

$contents = "<b>sample</b>";
$contents = strip_tags($contents);
echo $contents;

$members=array("Toshiki","Seiya","Kosuke");
array_push($members,"Takumi","Syotaro");

$array1 = [1, 2, 3];
$array2 = [10, 20, 30];
$array = array_merge($array1, $array2);

$time = mktime(9);
var_dump(date('Y年m月d日h時i分s秒', $time));

echo date('Y/m/d');
echo '<br>';
echo date('Y-m-d H:i:s');
echo '<br>';
echo date('Y年m月d日 H時i分s秒');
echo '<br>';

