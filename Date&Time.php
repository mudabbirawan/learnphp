<?php

 // Date function
 
echo "Today is " . date("d") . "<br><br>";
echo "Today is " . date("jS") . "<br><br>";
echo "Month is " . date("F") . "<br><br>";
echo "Month is " . date("m") . "<br><br>";
echo "Month is " . date("n") . "<br><br>";
echo "Month is " . date("M") . "<br><br>";
echo "Year is " . date("y") . "<br><br>";
echo "Year is " . date("Y") . "<br><br>";
echo "FullDate is " . date("l-m-y") . "<br><br>";
echo "FullDate is " . date("Y-F-d-l-h-A") . "<br><br>";


echo "WeakDay is " . date("D") . "<br><br>";
echo "WeakDay is " . date("l") . "<br><br>";
echo "WeakDay is " . date("N") . "<br><br>";
echo "WeakDay is " . date("w") . "<br><br>";
      
         // Time function

echo "Hour is " . date("h") . "<br><br>";     
echo "Hour is " . date("H") . "<br><br>";      
echo "Houris " . date("G") . "<br><br>";
echo "Hour is " . date("g") . "<br><br>";
echo "Mintues is " . date("i") . "<br><br>";
echo "Second is " . date("s") . "<br><br>";
echo "Mintues is " . date("a") . "<br><br>";
echo "time is " . date("h-i-sa") . "<br><br>"; 
echo "Date & Time is " . date("l-F-Y h-i-sa") . "<br><br>";
   
          // MkTimes & GmmkTimes
echo date("d-M-Y h-i-sa",mktime(0,0,0,10,4,2002)). "<br><br>";
echo date("l-M-Y h-i-sa",gmmktime(0,0,0,10,20,2002)). "<br><br>";

      // Date_create  & Date_format

 $data=date_create("2003-5-26");
 date_add($data, date_interval_create_from_date_string("25 Years"));
 echo date_format($data,"l-m-Y"). "<br><br>";

 $data=date_create("2026-6-10");
  echo date_format($data,"l-M-Y");
?>