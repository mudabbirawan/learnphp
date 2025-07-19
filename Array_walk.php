<?php

$fruits=[
    "a"=>"lemom",
    "b"=>"grapes",
    "c"=>"apple",
    "d"=>"banana"
];

array_walk($fruits, "myfunction","is a key of");

function myfunction($values,$keys,$param){
    echo "$keys $param $values  <br>";
}
$numbers = [20, 25];
$sum = 0;

function addToSum($item, $key) {
    global $sum;
    $sum += $item;
}

array_walk($numbers, 'addToSum');

echo "Sum = " . $sum . "<br>";



$data = [
    "fruits" => ["apple", "banana"],
    "vegetables" => ["a"=>"carrot","b"=> "potato"]
];

function showItems($value, $key) {
    echo "$key => $value<br>";
}

array_walk_recursive($data, "showItems");

?>