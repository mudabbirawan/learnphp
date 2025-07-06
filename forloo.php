<?php

for($a=1; $a <=10; $a++){
    echo $a  .")I love pakistan<br>";
}

$fruits=["Apple","banana","grapes","orange"];

for ($i = 0; $i <=15; $i++) {
    echo $fruits[$i % count($fruits)] . "<br>";
}

//Nestedloop

for ($a = 1; $a <= 100; $a += 10) {
    for ($b = $a; $b < $a + 10; $b++)  {
        echo $b . " ";
    }
    echo "<br>";
}

//Continue & break

for($i=0; $i <=15; $i++ ){
   if($i == 5){
    break;
   }
   echo $i . "<br>";
}

for($i=0; $i <=15; $i++ ){
   if($i == 5){
    continue;
   }
   echo $i . "<br>";
}

?>