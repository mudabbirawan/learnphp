<?php

// Function that prints "Mudabbir" 10 times and prints fruits 5 times
// function Abc(){
//     for($i = 1; $i <= 10; $i++){
//         echo "Mudabbir <br>";
//     }

//     $fruits = ["Apple", "Banana", "Grapes", "Orange"];

//     for($i = 1; $i <= 5; $i++){
//         echo $fruits[$i % count($fruits)] . "<br>";
//     }
// }
// Abc();
// function testing(){
//    echo "this is a string<br>";
// }



// testing();

// // Call the Abc function twice



// // Function with parameters
// function greetWithTimes($name, $times){
//     for($i = 1; $i <= $times; $i++){
//         echo "Hello, my name is $name <br>";
//     }
// }
// greetWithTimes("Mudabbir", 2);
// greetWithTimes("Ali", 5);
// greetWithTimes("Ashir", 2);

// // Subtraction function
// function sub($a, $b){
//     $result = $a - $b;
//     echo "Result: $result<br>";
// }
// sub(10, 5);
// sub(20, 5);

// // Array loop function
// function printArray($fruits){
//     for($i = 0; $i <= 5; $i++){
//         echo $fruits[$i % count($fruits)] . "<br>";
//     }
// }

// // Function calls
// printArray(["Apple", "Banana", "Mango"]);
// ;



// // Function with return value
// function greetWithAge($name, $age){
//     return "$name $age";
// }

// $name = greetWithAge("Mudabbir", 26);

// echo "Hello $name <br>";
// echo $name . "<br>";

// // Function returning sum
// function add($a, $b){
//     return $a + $b;
// }

// $result = add(20, 177);

// echo $result . "<br>";

// // Greeting function
// function greetSimple($name){
//     return "$name ";
// }

// // Loop greeting
for($i = 1; $i <= 10; $i++){
    echo greetSimplee("Hello Ali") . "<br>";
}

echo greetSimplee("My name is Mudabbir") . "<br>";

// Reusable array function
function arrayLooper($fruits){
    for($i = 0; $i <= 5; $i++){
        echo $fruits[$i % count($fruits)] . "<br>";
    }
    return $fruits;
}

//Call the arrayLooper function
arrayLooper(["Apple", "Banana", "Mango"]);

$v = arrayLooper(["Orange"]);


//function with argument

function test(&$string){
   $string .=" and something extra<br>";
}


$str="this is a string ";

test($str);
echo $str;


function first($num){
   $num += 10;
}

function second(&$num){
    $num += 12;
}
$number= 10;
first($number);
echo "final result in $number <br>";

second($number);
echo "final result in $number <br>";


function printNumbers($limit) {
    for ($i = 1; $i <= $limit; $i++) {
        echo $i . " <br>" ;
    }
}

printNumbers(10);


function printColors($colors) {
    for ($i = 0; $i < count($colors); $i++) {
        echo $colors[$i] . "<br>";
    }
}



printColors(["red","blue","black"]);


?>
