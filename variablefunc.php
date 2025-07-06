<?php

// function wow(){
//     echo "hello mudabbir<br>";
// }
// $myfunc="wow";
// $myfunc();

// function greet($name){
//     echo "hello $name<br>";
// }
// $myfunc="greet";
// $myfunc("yahoo baba");

// function arrayprint() {
//     for ($i = 1; $i <= 10; $i++) {
//         echo $i . "<br>";
//     }
// }

// $myfun = "arrayprint";
// $myfun(); // Ye arrayprint() ko call karega


// function array1() {
//     $i = 1;
//     while ($i <= 10) {
//         echo $i . "<br>";
//         $i++;
//     }
// }

// $myFun = "array1";
// $myFun(); // Ye arrayPrint() ko call karega


// function arrayPrint1() {
//     $i = 11;
//     do {
//         echo "this is a php" . "<br>";
//         $i++;
//     } while ($i <= 10);
// }

// $myFun = "arrayPrint1";
// $myFun(); // Ye arrayPrint() ko call karega

// recursive function

function display($number){
    if($number <= 5){
        echo "$number <br>";
          display($number + 1);
    }
}
display(1);
  

function factorial($n){
  if($n==1){
    return 1;
  }else{
    return ($n * factorial($n-1));
  }
}
echo factorial(6);




function recursiveLoopExample($start, $max) {
    if ($start > $max) {
        return;
    }
    
    for ($i = 1; $i <= $start; $i++) {
        echo $i . " ";
    }
    echo "<br>";
    
    recursiveLoopExample($start + 1, $max);
}

recursiveLoopExample(1, 10);




function add($a, $b) {
   if ($b == 0) {
        return $a;  // Base case: b zero ho gaya to a hi answer hai
    } else {
        return add($a + 1, $b - 1); 
        echo "$a + $b <br>" ;// a ko 1 se badhao, b ko 1 se ghatao
    }
}

echo add(10, 5);  // Output: 15
  

//local variable

function test(){
    $a=10;
    $b=2;
    echo "addition $a + $b <br>";
}
test();



// Global variables
$a = 5;
$b = 3;

function multiply(){
    global $a, $b;
    echo "Multiply: " . ($a * $b) . "<br>";
}

multiply();  // Output: Multiply: 15

// Function ke bahar bhi multiply
echo "Multiply: " . ($a * $b);







?>