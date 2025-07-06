<?php

$colors=["blue",20,"green",20.04];

echo $colors[0] ."<br>";
echo $colors[1] ."<br>";
echo $colors[2] ."<br>";
echo $colors[3] ."<br>";

$fruits[0]="mango";
$fruits[1]="apple";
$fruits[2]="orange";
$fruits[3]="banana";

echo "<pre>";
print_r($fruits);
echo "</pre>";




$name = ["mudabbir", "hadeed", "maaz", "arhum"];

for($i = 0; $i < 4; $i++){
    echo $i . ")"  . $name[$i] . "<br>";
}

//Associativr array

$person = [
    "name" => "Rahul",
    "age" => 25,
    "city" => "Delhi"
];

$person["name"]="hadeed";

echo "<pre>";
print_r($person);
echo "</pre>";


echo "<pre>";
var_dump($person);
echo "</pre>";

echo $person["name"] . "<br>";
echo $person["age"] . "<br>";
echo $person["city"];


$age=[
    1 => 23,
    2 => 30,
    4 => "arhum",
];
echo $age[1] . "<br>";
echo $age[2] . "<br>";
echo $age[4] . "<br>";


//Count & size of function

$foods=array("Apple","banana","orange","mango");


echo "<pre>";

print_r(array_count_values($foods));
echo "</pre>";
$len = count($foods);

for($i=0; $i < $len; $i++){
    echo $foods[$i] . "<br>";
}


$food = array(
    'fruits' => array("apple", "banana", "grapes", "mango"),
    'vegetable' => array("carrot", "potatoes", "pea", "collard"),
);

echo count($food['fruits']) . "<br>";     // Outputs: 4
echo sizeof($food['vegetable']) . "<br>" ; // Outputs: 4


// array in_array

$name=["mudabbir","ali","ashir","arsalan",56,"zain"];

// echo in_array("zain",$name);

if(in_array(56,$name,true)){
    echo "find successfully <br>";
}else{
    echo "Cannot find <br>";
}

$a = array(
    array('p', 'h'),
    array('p', 'd'),
    'o'
);

if (in_array('o', $a)) {
    echo "find successfully <br>";
} else {
    echo "Cannot find <br>";
}


//array_serach 

$colors=["pink","green","orange","blue"];

echo array_search("orange",$colors). "<br>";


$color=array('a'=>'pink','b'=>'green','c'=>'blue','d'=>'orange');

echo array_search("orange",$color);


?>


