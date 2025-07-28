<?php
$a = ["apple", "banana", "grapes", "mango"];

echo current($a) . "<br>";  // apple
echo key($a) . "<br>";      // 0
echo next($a) . "<br>";     // banana
echo current($a) . "<br>";  // banana
echo prev($a) . "<br>";     // apple
echo end($a) . "<br>";      // mango
echo current($a) . "<br>";  // mango
echo key($a) . "<br>";      // 3

echo reset($a) . "<br>";    // apple
      

       //Array list function

 $fruits=["apple","mango","grapes","orange"];
 
 list($a,$b,$c,$d) = $fruits;

 echo "Value of a : $a  <br>";
 echo "Value of b : $b  <br>";
 echo "Value of c : $c  <br>";
echo "Value of d : $d  <br>";


$color = ["0"=>"red", "1"=>"green", "2"=>"blue"];

list($first, $second, $third) = $color;

echo $first . "<br>";  // red
echo $second . "<br>"; // green
echo $third . "<br>";  // blue
        


        // Array extract & compact function
$a="yellow";
 $color = ["a"=>"red", "b"=>"green", "c"=>"blue"];

//  extract($color);
//  extract($color,EXTR_OVERWRITE);
//  extract($color,EXTR_SKIP);
  extract($color,EXTR_PREFIX_ALL,'user');
 
 echo  "Value of a : $user_a  <br>";
 echo  "Value of a : $user_b  <br>";
 echo  "Value of a : $user_c  <br>";

      // comfort

$name = "Ali";
$age = 25;
$city = "Lahore";
$gender = "Male";
$country = "Pakistan";

$extra=["gender","country"];

$person = compact("name", "age", "city",$extra);
echo "<pre>";
print_r($person);
echo "</pre>";     


       // Array  Range function

$num = range(0, 100, 10);
echo "<pre>";
print_r($num);
echo "</pre>";

$capital = range("A", "Z");
echo "<pre>";
print_r($capital);
echo "</pre>";


 foreach(range('h','a') as $letter){
    echo $letter . "<br>";
 }

      // Explode & Implode function

 $str="Hello world. Its a beautiful day";
 
 $array=explode(" ",$str,4);

 echo "<pre>";
print_r($array);
echo "</pre>";


$text = "apple,banana,orange";
$fruits = explode(",", $text);
 echo "<pre>";
print_r($fruits);
 echo "</pre>";

        //implode

$fruits = ["apple", "banana", "orange"];
$text = implode(" ", $fruits);
echo $text . "<br>";


$words = ["Hello", "world", "from", "PHP"];
$sentence = implode(" wow ", $words); 
echo $sentence . "<br>";

       // String str_Split & Chunk_Split

$str = "yahoo baba";

$array=str_split($str);

 echo "<pre>";
print_r($array);
 echo "</pre>";
    //chunk

$str = "yahoo baba";

$newstr=chunk_split($str,1,".");


 echo "<pre>";
print_r($newstr);
 echo "</pre>";

   // Lowercase & Uppercase


 $a="YAHOO BABA";
 
 $new=strtolower($a);

print_r($new)  ;
echo "<br>";

$b="yahoo baba";
 
$new=strtoupper($b);

print_r($new);
echo "<br>";

$b="yahoo baba";
 
$new=ucfirst($b);

print_r($new);
echo "<br>";

$b="yahoo baba";
 
$new=ucwords($b);

print_r($new);
echo "<br>";

$b="Yahoo Baba";
 
$new=lcfirst($b);

print_r($new);

?>