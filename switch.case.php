<?php
 
$weeksday= 9;



switch("$weeksday"){
    case 1:
        echo "Monday";
    break;  
    
     case 2:
        echo "tuesday";
    break; 
    case 3:
        echo "Wednesday";
    break;
    case 4:
        echo "Tursday";
    break;
     case 5:
        echo "Friday";
    break;
     case 6:
        echo "Saturday";
    break;
     case 3:
        echo "Sunday";
    break;
    default:
    echo "Enter the valid Weeks day";
}


$age =22;


switch(true){
    case($age >=18 && $age <=21):
    echo "you are eligible";
    break;
    
    case($age >=21 && $age <=30):
    echo "you are not eligible";
    break;

    default:
    echo "enter your valid age";
    break;
}

?>