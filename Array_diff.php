<?php

    // Array_diff()

$a = ["a" => "green", "b" => "brown", "c" => "blue", "red"];
$b = ["a" => "green", "yellow", "red"];
$result = array_diff($a, $b);

echo "<pre>";
print_r($result);
echo "</pre>";

    // Array_diff_key()

$array1 = [
    "a" => "apple",
    "b" => "banana",
    "c" => "cherry"
];

$array2 = [
    "a" => "apricot",
    "c" => "coconut"
];

$result = array_diff_key($array1, $array2);

echo "<pre>";
print_r($result);
echo "</pre>";

        // Array_diff_assoc()
$array1 = [
    "x" => 100,
    "y" => 200,
    "z"=> 120
];

$array2 = [
    "x" => 100,     // same key and value => ignored
    "y" => 250      // same key, different value => included in result
];

$result = array_diff_assoc($array1, $array2);

echo "<pre>";
print_r($result);
echo "</pre>";


          // Array_diff_uassoc
function Compare($a, $b) {
    if ($a === $b) return 0;
    return ($a > $b) ? 1 : -1;
}

$array1 = [
    "a" => "apple",
    "b" => "banana",
    "c" => "cherry"
];

$array2 = [
    "a" => "apple",
    "B" => "banana"   // Notice: 'B' is uppercase
];

$result = array_diff_uassoc($array1, $array2,"Compare");
echo "<pre>";
print_r($result);
echo "</pre>";

    
    // Array_diff_ukey()


function Comparekey($a, $b) {
    if ($a === $b) return 0;
    return ($a > $b) ? 1 : -1;
}

$array1 = [
    "a" => "apple",
    "b" => "banana",
    "c" => "cherry"
];

$array2 = [
    "A" => "apricot",
    "b" => "blueberry"
];

$result = array_diff_ukey($array1, $array2, "comparekey");

echo "<pre>";
print_r($result);
echo "</pre>";

      // Array_udiff-assoc()         

function compareValues($a, $b) {
    if ($a === $b) return 0;
    return ($a > $b) ? 1 : -1;
}  // case-sensitive string compare


$array1 = [
    "a" => "Apple",
    "b" => "banana",
    "c" => "cherry",
    "d"=>"grapes"
];

$array2 = [
    "a" => "apple",   // same key, different case in value
    "b" => "banana",
    "e"=> "mango"
];

$result = array_udiff_assoc($array1, $array2, "compareValues");
echo "<pre>";
print_r($result);
echo "</pre>";
         
     
       // Array_udiff_uassoc()


function compareValues2($a, $b) {
    if ($a === $b) return 0;
    return ($a > $b) ? 1 : -1;
}  // case-sensitive value compare


function compareKeys($a, $b) {
    if ($a === $b) return 0;
    return ($a > $b) ? 1 : -1;
} 

$array1 = [
    "a" => "Apple",
    "b" => "banana",
    "c" => "Cherry",
    "e"=> 450
];

$array2 = [
    "a" => "Apple",     // Key is different (A vs a)
    "b" => "banana"     // Value case different
];

$result = array_udiff_uassoc($array1, $array2, "compareValues2", "compareKeys");

echo "<pre>";
print_r($result);
echo "</pre>";


function compareValue($a, $b) {
    if ($a === $b) return 0;
    return ($a > $b) ? 1 : -1;
} 

$array1 = ["apple", "Banana", "Cherry"];
$array2 = ["apple", "Banana"];

$result = array_udiff($array1, $array2, "compareValues");

echo "<pre>";
print_r($result);
echo "</pre>";
?>





