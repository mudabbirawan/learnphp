<?php

      //array_values

$color=["a"=>"orange","b"=>"green","c"=>"red","d"=>"blue"];

$newcolor=array_values($color);


echo "<pre>";
print_r($newcolor);
echo "</pre>";

   // array_unique

$colors = [
    "a" => "red",
    "b" => "green",
    "c" => "red",
    "d" => "blue",
    "e" => "green"
];

$uniqueColors = array_unique($colors);


echo "<pre>";
print_r($uniqueColors);
echo "</pre>";


        // Array_column

        
$students = [
    ["id" => 101, "name" => "Ali", "marks" => 85],
    ["id" => 102, "name" => "Sara", "marks" => 92],
    ["id" => 103, "name" => "Zain", "marks" => 78]
];


$marks = array_column($students, "name","marks");

echo "<pre>";
print_r($marks);
echo "</pre>";


     // Array_chunk


$fruits = ["apple", "banana", "mango", "orange", "grape", "pineapple", "kiwi"];

$chunkedFruits = array_chunk($fruits, 3);
echo "<pre>";
print_r($chunkedFruits);
echo "</pre>";



$numbers = [10, 20, 30, 40, 50, 60, 70, 80];

$chunkedNumbers = array_chunk($numbers, 3);

echo "<pre>";
print_r($chunkedNumbers);
echo "</pre>";




$person = [
    "name" => "Ali",
    "age" => 25,
    "city" => "Karachi",
    "profession" => "Developer",
    "hobby" => "Photography"
];

// Chunk size 2, keys preserve kar rahe hain
$chunked = array_chunk($person, 2);
echo "<pre>";
print_r($chunked);
echo "</pre>";



     // Array_flip()
$a=array(
    "Bill"=>10,
    "Joe"=>20,
    "Peter"=>30
);

$newArray=array_flip($a);// array_flip(): $a array ke keys aur values ko ulta kar deta hai. 
$newarray=array_change_key_case($a,CASE_UPPER);// array ke saare keys ko lowercase (chhote akshar) mein convert kar deta hai.

echo "<pre>";
print_r($newArray);
echo "</pre>";
    
echo "<pre>";
print_r($newarray);
echo "</pre>";


     // Array_sum()

$a=[10,20,30,40];
   
$sum=array_sum($a);
$product=array_product($a);
  
echo $sum . "<br>";

echo $product;



      // Array_rand()

 $A=array("red","blue","green","pink","orange");
 
 $random=array_rand($A,4);

  echo "<pre>";
  print_r($random);
  echo "</pre>";

  echo $A[$random[0]] . "<br>";
   echo $A[$random[1]] . "<br>";
    echo $A[$random[2]] . "<br>";
   echo $A[$random[3]];


 
$fruits = array("a" => "Apple", "b" => "Banana", "c" => "Cherry", "d" => "Date");

$randomkeys = array_rand($fruits, 2);

echo "<pre>";
print_r($randomkeys);
echo "</pre>";

echo $fruits[$randomkeys[0]] . "<br>";
echo $fruits[$randomkeys[1]] . "<br>";
     // Shuffle
 
$name = ["Mudabbir", "Ali", "Ahmed", "Zain", "Hamza"];

shuffle($name); // Random order mein names arrange ho jaayenge

print_r($name);
echo "<br>";


     //array_fill()


$filledArray = array_fill(1, 5, 'apple');
print_r($filledArray);


    // Array_fill_keys()


$keys = ["a", "b", "c", "d"];
$filledArray = array_fill_keys($keys, 'pending');
print_r($filledArray);






?>