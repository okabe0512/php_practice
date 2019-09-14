<?php

//課題１

$name = "岡部";

switch ($name){
    case "岡部":
     echo "私は岡部です";
     echo "\n";
     break;
     
    default:
     echo "あなたの名前ではありません";
     echo "\n";
     break;
     
}


//課題２

$total = 0;

for ($i = 0; $i <= 10000; $i++) {
    $total += $i;
}
    echo $total;
    echo "\n";


//課題３

$fruits = array("apple","lemon","melon","banana","peach");

foreach($fruits as $fruit){
    echo $fruit;
    echo "\n";
}


//課題４

$start = 1;
$end = 101;

for($i = $start; $i < $end; $i++) {
  if($i%5 == 0){
    echo $i;
    echo"\n";}
}
