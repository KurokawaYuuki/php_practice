<?php
echo 'hello php2!'."\n";

/*$name にあなたの名前を代入し、 if文で $name があなたの名前だったら 「私は あなたの名前 です」、
もし違ったら「あなたの名前ではありません」と表示するように実装してください。*/
$name = "Kurukawa Yuuki";
if ($name == "Kurukawa Yuuki") {
    echo "「私は KurukawaYuuki です」"."\n";
} else {
    echo "「私は KurukawaYuuki ではありません」"."\n";
}
/*
switch ($name){
    case "Kurukawa Yuuki":
        echo "「私は KurukawaYuuki です」"."\n";
        break;
    default:
        echo "「私は KurukawaYuuki ではありません"."\n";
        break;
}
*/



/*for文を使って、1から10000までの合計の値を表示してください。*/
$total = 0;
for($i = 1;$i <= 1000;$i ++){
 $total += $i;
}
echo $total; ".\n";

/*$fruits に配列で好きなフルーツを5個代入し、foreach文で順番に出力してください。*/
$fruits = array("apple","orange","lemon","banana","grape");
foreach($fruits as $fruit){
    echo "要素は" . $fruit;
    echo "\n";
}

/*【応用】 次のプログラムのバグを修正し、1から100までの間で5の倍数のみ表示するようにしてみてください。*/

/* for文の始めの値を定義する */
$start = 1;
/* for文の終わりの値を定義する */
$end = 100;

for($i = $start; $i <= $end; $i++){
if($i %5 == 0){
    echo $i;
    echo "\n";
}
}

  // 5で割り切れたら{}内を実行する
 
  
