<?php

      // String addslashes & stripslashes

//  $a='Hello I am "yahoo baba"';
//  echo $a . "<br>";     
//  $newStr=addcslashes($a,"yb");


//  echo stripslashes($newStr);
//  echo "<br>";
      

      // Htmlentites & Htnlspecialchar


$str = '<a href="https://www.yahoobaba.net">Yahoo Baba Website</a>';

echo $str . "<br><br><br>";

// echo htmlentities($str, ENT_QUOTES);
$new = htmlspecialchars($str, ENT_QUOTES);

echo htmlspecialchars_decode($new,ENT_QUOTES);
echo "<br><br>";


// echo "<pre>";
// print_r(get_html_translation_table(HTML_SPECIALCHARS));
// echo "</pre>";

// echo "<pre>";
//  print_r(get_html_translation_table(HTML_ENTITIES));
//  echo "</pre";



      // MD5 & Sha1
$a="Hello";

echo "The string  :" . $a . "<br><br>";

echo "MD5 Binary : " . md5($a,true) . "<br><br>";

echo "MD5 Hex : " . md5($a) . "<br><br>";

echo "Sha1 Binary " . sha1($a,true) . "<br><br>";

echo "Sha1 Hex : " . sha1($a) . "<br><br>";

if(md5($a)== "8b1a9953c4611296a827abf8c47804d7"){
      echo "passwoard matched <br><br>";

}  


        // Convert_uuencode & Convert_uudecode

 $str="Hello";
 
$encodestring=convert_uuencode($str);
echo $encodestring . "<br>";

$decodestring=convert_uudecode($encodestring);
echo $decodestring . "<br><br>";

      // bin2hex & hex2bin
 
 $str=bin2hex( "Mudabbir Ali");
 echo $str ."<br><br>";

 echo hex2bin($str);
 echo  "<br>";

      // chr() & ord()

 $a=578;
 
 echo chr($a);
 echo  "<br>";

 $b="hello world";
 
 echo ord($b);

       // Strip_tags & wordwraps()

 $str="Hello <b>world</b> ,Hello <i>earth</i>";

 echo $str . "<br>";
 
 echo strip_tags($str,"<b>");
 echo "<br>";

$text = "This is a long sentence that will break after every 15 characters.";
echo wordwrap($text, 15, "<br>",True);
echo "<br>";


       // Min & Max

$val=min(30,200,20,23,10);

echo $val . "<br>";

$val=max(30,200,20,23,10);
echo $val . "<br>";

$val=min(array(2,4,8),array(1,5,3));

echo "<pre>";
print_r($val);
echo "<pre>";

$val=max(array(2,4,8),array(1,5,3));

echo "<pre>";
print_r($val);
echo "<pre>";

      // Math abs(), Ceil(), floor(),Round()
echo ceil(4.6) . "<br>";
echo ceil(0.6) . "<br>";

echo floor(4.6) . "<br>";
echo floor(2.6) . "<br>";

echo round(4.6) . "<br>";
echo round(3.4) . "<br>";

echo abs(-4) . "<br>";

       // Math: Intdiv(),Sqrt(),Pow()

echo intdiv(8,4) . "<br>" ;      

echo intdiv(6,4) . "<br>" ;    



echo sqrt(4) . "<br>" ;

echo sqrt(16) . "<br>" ;


echo pow(8,4) . "<br>" ;    


       // Math: rand(), mt_rand() & lcg_value()

echo rand(10,30) . "<br>"; 
echo rand(0,10) . "<br>"; 
echo rand() . "<br>"; 

echo mt_rand() . "<br>"; 
echo mt_rand(10,30) . "<br>"; 
echo mt_rand(30,40) . "<br>"; 
       
echo lcg_value() . "<br>"; 

      // Date function
 
echo "Today is " . date("d") . "<br>";
echo "Today is " . date("jS") . "<br>";
echo "Month is " . date("F") . "<br>";
echo "Month is " . date("m") . "<br>";
echo "Month is " . date("n") . "<br>";
echo "Month is " . date("M") . "<br>";
echo "Year is " . date("y") . "<br>";
echo "Year is " . date("Y") . "<br>";
echo "FullDate is " . date("l-m-y") . "<br>";
echo "FullDate is " . date("Y-F-d-l-h-A") . "<br>";


echo "WeakDay is " . date("D") . "<br>";
echo "WeakDay is " . date("l") . "<br>";
echo "WeakDay is " . date("N") . "<br>";
echo "WeakDay is " . date("w") . "<br>";
      
         // Time function

echo "Hour is " . date("h") . "<br>";     
echo "Hour is " . date("H") . "<br>";      
echo "Houris " . date("G") . "<br>";
echo "Hour is " . date("g") . "<br>";
echo "Mintues is " . date("i") . "<br>";
echo "Second is " . date("s") . "<br>";
echo "Mintues is " . date("a") . "<br>";
echo "time is " . date("h-i-sa") . "<br>"; 
echo "Date & Time is " . date("l-F-Y h-i-sa") . "<br>";
?>