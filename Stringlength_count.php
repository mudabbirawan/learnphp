<?php

     // length

 $a="yahoo baba";
 
 echo strlen($a);
 echo "<br>";


 $a="Mudabbir";
 
 echo strlen($a);
 echo "<br>";

           // count
  $a="yahoo baba php";
 echo "<pre>";
 print_r(str_word_count($a,2));
  echo "</pre>";

   
  
$text = "apple banana apple grape apple";
$count = substr_count($text, "apple",0,30);
echo "apple " . $count . "<br>";  // Output: 3

    //find postion
    //strpos
$a="I love php, I love php too!";

echo strpos($a,"php");
echo "<br>";
  
   //strrpos
$a="I love php, I love php too!";

echo strrpos($a,"php");
echo "<br>";
      //stripos
$a="I love php, I love php too!";

echo stripos($a,"Too");
echo "<br>";
       //strripos
$a="I love php, I love php too!";


echo strripos($a,"Love");
echo "<br>";

        // search function

        //strstr

 $a="Hello World. The world is nice";
 
 echo strstr($a,"World") . "<br>";


       //stristr
 $a="Hello World. The world is nice";
 
 echo stristr($a,"world"). "<br>";
          
             //strrchr
  $a="Hello world. The world is nice";
 
 echo strrchr($a,"world") . "<br>";
 
          //strpbrk
  $a="Hello world. The world is nice";
 
 echo strpbrk($a,"e") . "<br>";

      // String Substr function
     
$a="Hello world. The world is nice"; 

echo substr($a,6,25) . "<br>";

     
$a="Hello world. The world is nice"; 

echo substr($a,10,-5). "<br>";
    

       // replace function
       // str_replace
$a="Hello world. The world is nice"; 
$array=["Hello"=>"Hi","world"=>"earth"];

$find=["Hello","World"];
$replace=["Hi","earth"];

echo str_replace($find,$replace,$a). "<br>"; 
echo str_ireplace($find,$replace,$a). "<br>";

echo substr_replace($a,"earth",6,10). "<br>";
echo strtr($a,$array). "<br>";


        
         // String compare function

 $a= strcmp("Hello world!","Hello ");        
 echo $a . "<br>";

  $b=strncmp("Hello world!","hello world is nice",6);
   echo $b . "<br>";
   


   
 $c= strcasecmp("HELLO world!","Hello world! is");        
 echo $c . "<br>";


 $d= strncasecmp("HELLO world!","Hello world is nice",7);        
 echo $d . "<br>";

  $d= strnatcmp("2Hello world!","10Hello World ");        
 echo $d . "<br>";

   $d= strnatcasecmp("10Hello world!","2Hello World ");        
 echo $d . "<br>";

   $d= substr_compare("Hello world!","Hello World ",5);        
 echo $d . "<br>";

   
similar_text("Hello world!","Hello world!",$percent);        
 echo $percent . "<br>";


       // String strrev() & str_shuffle


echo strrev("mudabbir");      
echo "<br>";
echo str_shuffle("Yahoo");
echo "<br>";
     // string str_ped() & str_repeat()

$str="Hello world";

echo str_pad($str,20,"- ",STR_PAD_BOTH);
echo "<br>";      

       // String trim & chop function

$str="Yahoo Baba ";
echo $str . "<br>";

echo trim($str,"Yba ");
echo "<br>";

$str="Yahoo Baba  ";
echo $str . "<br>";

echo chop($str,"ba ");


?>