<?php

echo "Mudabbir<br>";
echo "Mudabbir<br>";

goto  abc; 

echo "Mudabbir";
echo "Mudabbir";
echo "Mudabbir";
echo "Mudabbir";
echo "Mudabbir";


abc:
echo "hadeed";


for($i=1; $i<=10; $i++){
    goto end;
    if($i == 6){
       
    }

    echo $i . "<br>";
    

}
 end:
    echo "rint number";

$i = 1;

while ($i <=10) {
    echo $i . "<br>";

    if ($i == 5) {
        goto end;  // Jab $i 5 ho, loop se bahar jump karo
    }

    $i++;
}


$i = 1;

do {
    echo $i . "<br>";

    if ($i == 5) {
        goto end_loop;  // Jab $i 5 ho to loop se bahar jump karo
    }

    $i++;
} while ($i <= 10);

end_loop:
echo "Loop khatam hogaya!";
?>



