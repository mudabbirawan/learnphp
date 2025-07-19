<?php

// Example 1: array_intersect with numbers
$array1 = [1, 2, 3, 4, 5];
$array2 = [3, 4, 5, 6, 7];

$result = array_intersect($array1, $array2);
echo "<pre>";
print_r($result);
echo "</pre>";
echo "<br>";  // Line break after first output


// Example 2: array_intersect with strings
$a = ['apple', 'banana', 'cherry'];
$b = ['banana', 'cherry', 'date'];
$c = ['cherry', 'banana', 'fig'];

$result = array_intersect($a, $b, $c);
echo "<pre>";
print_r($result);
echo "</pre>";
echo "<br>";  // Line break after second output


// Example 3: array_intersect_key
$array1 = [
    "a" => "apple",
    "b" => "banana",
    "c" => "cherry"
];

$array2 = [
    "a" => "apricot",
    "c" => "cranberry",
    "d" => "date"
];

$result = array_intersect_key($array1, $array2);
echo "<pre>";
print_r($result);
echo "</pre>";
echo "<br>"; // Line break after third output


$array1 = [
    "a" => "apple",
    "b" => "banana",
    "c" => "cherry",
       "d" => "date"
];

$array2 = [
    "a" => "apple",
    "b" => "blueberry",
    "c" => "cherry",
    "d" => "date"
];

$result = array_intersect_assoc($array1, $array2);
echo "<pre>";
print_r($result);
echo "</pre>";



              //array_intersect_uassoc
function Compare($a, $b){
    if($a === $b){
        return 0;
    }
    return ($a > $b) ? 1 : -1;
}

$array1 = [
    1   => "apple",
    "2" => "mango",
    3   => "cherry"
];

$array2 = [
    "1" => "apple",
    2   => "banana",
    4   => "date"
];

$result = array_intersect_uassoc($array1, $array2, 'Compare');

echo "<pre>";
print_r($result);
echo "</pre>";
            
           // array_intersect_ukey
function keyCompare($a, $b){
    if($a === $b){
        return 0;
    }
    return ($a > $b) ? 1 : -1;
} 

$array1 = [
    "A" => "apple",
    "b" => "banana",
    "C" => "cherry"
];

$array2 = [
    "A" => "apricot", 
    "B" => "blueberry",
    "d" => "date",
    "C"=>"mango"
];

$result = array_intersect_ukey($array1, $array2, 'keyCompare');
echo "<pre>";
print_r($result);
echo "</pre>";
   
                // array_uintersect
function compare_values($a, $b){
    if($a === $b){
        return 0;
    }
    return ($a > $b) ? 1 : -1;
} 

$array1 = ["apple", "banana", "cherry"];
$array2 = ["Banana", "banana", "date"];
$array3 = ["banana", "cherry", "fig"];

$result = array_uintersect($array1, $array2, $array3, "compare_values");

echo "<pre>";
print_r($result);
echo "</pre>";  
 
    //array_uintersect_assoc

function compare_values1($a, $b){
    if($a === $b){
        return 0;
    }
    return ($a > $b) ? 1 : -1;
} 

$array1 = [
    "a" => "apple",
    "b" => "banana",
    "c" => "cherry"
];

$array2 = [
    "a" => "apple",
    "b" => "Banana",
    "c" => "cherry",
    "d" => "date"
];

$result = array_uintersect_assoc($array1, $array2, 'compare_values1');
echo "<pre>";
print_r($result);
echo "</pre>";


       //array_uintersect_uassoc()
function valueCompare($a, $b){
    return strcmp($a, $b);  // case-sensitive value comparison
}

function keyCompare1($a, $b){
    return strcasecmp($a, $b);  // case-insensitive key comparison
}

$array1 = [
    "A" => "apple",
    "b" => "banana",
    "C" => "cherry"
];

$array2 = [
    "a" => "apple",
    "B" => "banana",
    "c" => "date"
];

$result = array_uintersect_uassoc($array1, $array2, 'valueCompare', 'keyCompare1');
echo "<pre>";
print_r($result);
echo "</pre>";
?>

