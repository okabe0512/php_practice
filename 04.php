<?php

//課題1.
//引数に数値を指定して実行すると、
//数値を2倍にして返す関数を作成してください

function times2($result){
    return $result* 2;
}
echo times2(8);

?>

<?php

//課題2.
//$aと$bを仮引数に持ち、
//$aと$bを足した結果を返す関数を作成してください。

function a($a,$b){
    return $a + $b;
}
echo a(8,4);

?>

<?php

//課題3.
//$arr という配列の仮引数を持ち、
//数値が入った配列array(1, 3, 5 ,7, 9) を渡すと
//その要素をすべてかけた結果を返す関数を作成してください。

function alltimes($arr){
    $result =1;
    foreach($arr as $num){
    $result *= $num;
}
echo $result;
}
echo alltimes(array(1,3,5,7,9));
?>


<?php
//課題3. 別解

$arr=array(1,3,5,7,9);
    $result = 1;
    foreach($arr as $num){
        $result *= $num;
    }
    
    echo $result;

?>


<?php
//課題4
//次のプログラムは、配列の中で一番大きい値を返す
//max_array という関数を実装しようとしています。
//途中の部分を完成させてください。

function max_array($arr){
// とりあえず配列の最初の要素を一番大きい値とする
    $max_number = $arr[0];
    foreach($arr as $a){
        if($max_number < $a){
            $max_number = $a;
//もしMAXよりaが大きい場合、aをMAXとする
        }
 }

 return $max_number;
 }

    echo max_array(array(3,7,2,4,9,6));

?>


<?php
//課題5

//strip_tags
//文字列から HTML および PHP タグを取り除く

$str = "<h1>タグを</h1>"
  . "<p>取り除く</p>";
echo strip_tags($str) ."\n";

?>


<?php
//array_push
//指定した配列の末尾に要素を追加する

$color= array('red', 'blue');
print_r($color);
 
var_dump( array_push($color, 'green', 'black') );
print_r($color);

?>


<?php
//array_merge
//指定した複数の配列を結合する

$color = array('red', 'blue', 'green');
$fruit = array('apple', 'banana', 'melon');
 
print_r( array_merge($color,$fruit) );

?>


<?php
//time
//

var_dump( time() );
 
echo date('Y年m月d日 H時m分') ."\n";
echo date('Y年m月d日 H時m分', time() + 24 * 3600) ."\n";
 
var_dump( microtime() );
var_dump( microtime(true) );

?>


<?php
//mktime
//引数に指定した日時からUnixタイムスタンプを取得する

$tm = mktime( 11, 11, 11, 11, 11, 2011);
var_dump($tm);
 
echo date('Y年m月d日 H時m分s秒', $tm)

?>


<?php
//date
//日付 / 時刻 / 曜日を表示する

echo date("Y/m/d H:i:s P l") . "\n";
echo gmdate("Y/m/d H:i:s P l") . "\n";


?>