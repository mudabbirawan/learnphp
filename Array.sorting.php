
<?php
//  sort() 
$fruits = ['orange', 'banana', 'grapes', 'apple', 'watermelon'];
sort($fruits);
echo "<pre>";
print_r($fruits);
 echo "</pre>";


//  rsort() -
$numbers = [50, 150, 200, 10, 5, 300];
rsort($numbers);
echo "<pre>";
print_r($numbers);
echo "</pre>";


// : asort()
$fruit = [ 
    "a" => "lemon",
    "b" => "mango",
    "c" => "apple",
    "d" => "banana"
];
asort($fruit);
echo "<pre>";
print_r($fruit); 
echo "</pre>";


// arsort() 
$fruit = [ 
    "a" => "lemon",
    "b" => "mango",
    "c" => "apple",
    "d" => "banana"
];
arsort($fruit); 
echo "<pre>";
print_r($fruit); 
echo "</pre>";


//ksort() 
$fruit = [
    "e" => "lemon",
    "d" => "mango",
    "a" => "apple",
    "c" => "banana"
];
ksort($fruit);
echo "<pre>";
print_r($fruit);
echo "</pre>";

//krsort() 
$fruit = [
    "e" => "lemon",
    "d" => "mango",
    "a" => "apple",
    "c" => "banana"
];
krsort($fruit);
echo "<pre>";
print_r($fruit);
echo "</pre>";


//  natsort()  
$files = ["img12.png", "img10.png", "img2.png", "img1.png"];
natsort($files);
echo "<pre>";
print_r($files);
echo "</pre>";


// natcasesort()  
$files2 = ["Img12.png", "img10.png", "Img2.png", "img1.png"];
natcasesort($files2);
echo "<pre>";
print_r($files2);
echo "</pre>";


// array_multisort()  
$products = ["Shirt", "Pants", "Shoes"];
$prices = [500, 700, 300];
$ratings = [4, 5, 3];
array_multisort($products, $prices, $ratings);
echo "<pre>";
print_r($products);
echo "</pre>";
echo "<pre>";
print_r($prices);
echo "</pre>";
echo "<pre>";
print_r($ratings);
echo "</pre>";


//  array_reverse()
$colors = ["red", "green", "blue"];
$reversed = array_reverse($colors);
echo "<pre>";
print_r($reversed);
echo "</pre>";
?>
