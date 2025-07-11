<?php

    // Array_keys


    $color=['pink','green','orange','blue'];

    $newarray=array_keys($color);
   echo "<pre>";
 print_r($newarray);
 echo "</pre>";
  


    $fruits = [
    'first' => 'apple',
    'second' => 'banana',
    'third' => 'cherry',
    'fourth' => 'date'
];

// $result =array_keys($fruits);
$result =array_key_first($fruits);
$result =array_key_last($fruits);
$result =key_exists('6',$fruits);

if($result){
  echo "key exist <br>";
}else{
   echo "key doesnot exist";
}
// echo "<pre>";
// print_r($result);
// echo "</pre>"

?>