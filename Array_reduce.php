<?php

function sum($n,$m){
    return $n + $m;

}

$a=[10,22,128];


$result = array_reduce($a, 'sum',145);

print_r($result);


function greet($n,$m){
    return $n ."-" . $m;

}

$a=["mudabbir","ali"];


$result = array_reduce($a, 'greet',"asif");

echo "<pre>";
print_r($result);
echo "</pre>";

function greet1($n, $m){
    $n[] = "$m";
    return $n;
}

$a = ["mudabbir", "ali"];

$result = array_reduce($a, 'greet1', ["asif"]);

echo "<pre>";
print_r($result);
echo "</pre>";

?>