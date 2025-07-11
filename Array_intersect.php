<?php


$array1 = array("a" => "red", "b" => "green", "c" => "blue");
$array2 = array("a" => "red", "b" => "yellow", "d" => "blue");

// $result = array_intersect($array1, $array2);//array_intersect values same but keys different

// $result = array_intersect_key($array1, $array2);//array_intersect key same but values different

$result = array_intersect_assoc($array1, $array2);//key bhi same values bhi same

echo "<pre>";
print_r($result);
echo "</pre>";


function compare($a,$b){
    if($a === $b){
        return 0;
    }
    return ($a > $b) ? 1 : -1;
}
function comparevalues($a,$b){
    if($a === $b){
        return 0;
    }
    return ($a > $b) ? 1 : -1;
}



$a1 = array("a" => "red", "b" => "yellow", "c" => "blue");
$a2 = array("a" => "red", "b" => "pink", "c" => "blue");

 $newArray1=array_intersect_uassoc($a1,$a2,"compare"); /*u matlab yser-defined function jo ap khud banata ho jwy atr values dono same hogi  
 Keys ko user-defined function ke zariye compare kiya jata hai*/


 $newArray2=array_uintersect_assoc($a1,$a2,"compare");//Values ko user-defined function se compare kiya jata hai


$newArray3=array_intersect_ukey($a1,$a2,"compare");  //Keys ko user-defined function ke zariye compare kiya jata hai  

$newArray4=array_uintersect($a1,$a2,"compare");//Compares values only using a user-defined comparison function


 /*Values ko custom user-defined function se compare karta hai

 Keys ko bhi custom user-defined function se compare karta */
$newArray5=array_uintersect_uassoc($a1,$a2,"compare","comparevalues");

echo "<pre>";
print_r($newArray1);
echo "</pre>";

echo "<pre>";
print_r($newArray2);
echo "</pre>";

echo "<pre>";
print_r($newArray3);
echo "</pre>";

echo "<pre>";
print_r($newArray4);
echo "</pre>";

echo "<pre>";
print_r($newArray5);
echo "</pre>";
?>