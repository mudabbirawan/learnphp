<?php
//true
// $a =1;
 
// do{
//    echo "Hello brother<br>";
//    $a++;
// }while($a <=10);


//false pa aik bar print karaga

$x = 1;

do {
    echo "Ye message ek baar zaroor chalega";
    $x++;
} while ($x < 5);

 $food = ["eggs", "bread", "beans"];
 $i=0;

 do {
     echo $food[$i % count($food)] . "<br>";
     $i++;
 } while ($i <= 10);





?>
