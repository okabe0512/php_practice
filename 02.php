<?php
echo 'hello php!';

//課題１
$a = 3;
$b = 7;
echo $a + $b;
echo "\n";

//課題2
$array_month =[
    "January","February","March","Aplil","May","June","July","Augest","September","October","November","December"
];
$array_month =[
    "January" => "1月",
    "February" => "2月",
    "March" => "3月",
    "Aplil" => "4月",
    "May" => "5月",
    "June" => "6月",
    "July" => "7月",
    "Augest" => "8月",
    "September" => "9月",
    "October" => "10月",
    "November" => "11月",
    "December" => "12月",
];

echo $array_month["Augest"];
echo "\n";


//課題３
$hello = "Hello,";
$name = "Okabe";
$world = "'s World!";
echo $hello.$name.$world;
echo "\n";


//課題４
$tech_boost = 'tech';
$tech_boost .= ' boost';
echo $tech_boost;
echo "\n";


//課題５
$calendar_2018 = [
  "January" => "1月",
  "February" => "2月",
  "March" => "3月",
  "April" => "4月",
  "May" => "5月",
  "June" => "6月",
  "July" => "7月",
  "August" => "8月",
  "September" => "9月",
  "October" => "10月",
  "November" => "11月",
  "December" => "12月"
];

echo $calendar_2018["December"];
echo "\n";