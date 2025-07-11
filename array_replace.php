<?php

//array_replace index array

$fruits = ['orange', 'mango', 'banana', 'watermelon'];
$vegetable = ['carrot', 'patatos'];


$newArray = array_replace($fruits, $vegetable);

echo "<pre>";
print_r($newArray);
echo "</pre>";


//Associative array
$color=['blue','green','a'=>'pink','orangr'];
$name=['a'=>'mudabbir',1=>'ali'];

$newArrays = array_replace($color,$name);

echo "<pre>";
print_r($newArrays);
echo "</pre>";


//multidimensional array
//array_replace_recursive
$array1=[
[
    'a'=>'red',
    'b'=>'green','pink',
]
];

$array2=[
    [
     'a'=>'yellow',
     'b'=>'black'
        ]
    ];

    $new=array_replace_recursive($array1,$array2);

   echo "<pre>";
print_r($new);
echo "</pre>"; 



$array1 = [
    [
        'fruit' => 'apple',
        'color' => 'yellow',
        0 => 'fresh'
    ]
];

$array2 = [
    [
        'fruit' => 'banana',
        0 => 'grapes'
    ]
];

$new = array_replace_recursive($array1, $array2);

echo "<pre>";
print_r($new);
echo "</pre>";





//Array_pop

$a=["mudabbir","ali","ashir","anwar"];

array_pop($a);

   echo "<pre>";
print_r($a);
echo "</pre>"; 

//array_push

$b=["apple","banana","grapes"];

array_push($b,"mango","orange");

   echo "<pre>";
print_r($b);
echo "</pre>"; 


    // array_shift

$c=["amir","aqib","aniq","aliyan"];

    
array_shift($c);

echo "<pre>";
print_r($c);
echo "</pre>"; 


   //array_unshift

$d=["red","blue","green"];

array_unshift($d,"orange","pink","yellow");

echo "<pre>";
  print_r($d);
echo "</pre>"; 





   //array_merge  
   //index array or assocaitive array

   $a=['a'=>'ali','b'=>'asif','c'=>'aqib','d'=>'amir'];

   $b=['b'=>'asad','e'=>'aziz'];

   $d=array_merge($a,$b);
   
 echo "<pre>";
  print_r($d);
echo "</pre>"; 


 //array_merge_recursive

 $fruit=[
'a'=>'apple',
 'b'=>'banana',
 'c'=>'grapes'
];

 $vegetables=[
   'b'=>['color'=>['red','blue']],
    'e'=>'pea',
    44,
    55
];

 $newArrays=array_merge_recursive($fruit,$vegetables);

  echo "<pre>";
  print_r($newArrays);
echo "</pre>"; 

   //array_combine

   $keys = ["name", "age", "city"];
$values = ["Ali", 25, "Lahore"];

$result = array_combine($keys, $values);
echo "<pre>";
print_r($result);
echo "</pre>";

    // Array_slice

    $fruits = ["apple", "banana", "orange", "mango", "grapes"];

$slice = array_slice($fruits, 1,3 ,true);
echo "<pre>";
print_r($slice);
echo "</pre>";


   //array_splice
   $fruits = ["apple", "banana", "orange", "mango", "grapes"];

array_splice($fruits, 0, 2 ,true);

echo "<pre>";
  print_r($fruits);
echo "</pre>";

   //array_splice 


$color = ['red', 'pink', 'green', 'blue'];
    
array_splice($color,-1,1);
  
echo "<pre>";
  print_r($color);
echo "</pre>";

   $colors = ['red', 'pink', 'green', 'blue'];

   $fruit = ['apple', 'orange'];

//    array_splice($colors,1,2, $fruit);

 //   array_splice($colors,2,count($colors), $fruit);
    array_splice($colors,count($colors),0, $fruit);
   
    //array_splice($colors,1,0, $fruit);

   echo "<pre>";
  print_r($colors);
echo "</pre>";

?>