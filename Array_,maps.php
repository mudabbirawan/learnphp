<?php

function Square($n){
    return $n * $n;
}
$a=[1,2,3,4,5,6];

$newArray=array_map('Square',$a);



echo "<pre>";
print_r($newArray);
echo "<pre>";

function sum($n){
    return $n + 5;
}
$a=[15,33,45];

$newArray=array_map('sum',$a);



echo "<pre>";
print_r($newArray);
echo "<pre>";

function greet($first , $last){
      return $first . ' ' . $last;
}
$firstNames = ["Ali", "Sara"];
$lastNames = ["Khan", "Ahmed"];

$newArray=array_map('greet',$firstNames,$lastNames);



echo "<pre>";
print_r($newArray);
echo "<pre>";


function Square1($n,$m){
    return "$n = $m";
}
$a=[1,2,3,4,5,6];
$b=["lemon","orange"];
$newArray=array_map('Square1',$a,$b);



echo "<pre>";
print_r($newArray);
echo "<pre>";
?>