<?php

$emp=[

    [1,"mudabbir","manager",50000],
    [2,"salmam","saleman",30000],
    [3,"amir","computer opterator",12000],
    [4,"ali","drive",3000],

];

for($i=0; $i < 4 ; $i++ ){
    for($j=0; $j < 4 ; $j++){
        echo $emp[$i][$j] .     " ";
    }
    echo "<br>";
}

  echo "<table  border='2px' >";
       echo "<tr>
        <th>Emp-id</th>
         <th>Emp-name</th>
          <th>Designation</th>
           <th>salary</th>
       </tr>";
   foreach($emp as $value1){
    echo "<tr>";
    foreach($value1 as $value2){
        echo "<td> $value2  </td>";
    }
    echo "</tr>";
   }
  echo  "</table> <br>";


// echo $emp[0][0]."<br>";
// echo $emp[0][1] ."<br>";
// echo $emp[0][2] . "<br>";
// echo $emp[0][3] ."<br>";


// echo $emp[1][0]."<br>";
// echo $emp[1][1] ."<br>";
// echo $emp[1][2] . "<br>";
// echo $emp[1][3] ."<br>";


// echo $emp[2][0]."<br>";
// echo $emp[2][1] ."<br>";
// echo $emp[2][2] . "<br>";
// echo $emp[2][3] ."<br>";

// echo $emp[3][0]."<br>";
// echo $emp[3][1] ."<br>";
// echo $emp[3][2] . "<br>";
// echo $emp[3][3] ."<br>";

// echo "<pre>";
// print_r($emp);
// echo "</pre>";

//multidimensional associative arrays

$marks = [
    "ashir" => [
        "physics" => 75,
        "computer" => 82,
        "chemistry" => 65
    ],
    "zain" => [
        "physics" => 88,
        "computer" => 79,
        "chemistry" => 70
    ],
    "sana" => [
        "physics" => 92,
        "computer" => 85,
        "chemistry" => 80
    ]
];
   echo "<table border='2'>";
   echo "<tr>
      <th>Name</th>
      <th>Physics</th>
      <th>Computer</th>
      <th>Chemistry</th>
   </tr>";
foreach($marks as $key=>$value){
    echo "<tr>";
  echo " <td>$key</td> ";
  foreach($value as $value1){
    echo "<td>$value1</td>";
}
  echo "</tr>";

}
echo "</table>";



echo "<pre>";
  print_r($marks);
  echo "</pre>";


  $employees = [
    "E101" => [
        "name" => "Ali Khan",
        "department" => "Sales",
        "salary" => 50000
    ],
    "E102" => [
        "name" => "Sara Ahmed",
        "department" => "Marketing",
        "salary" => 60000
    ],
    "E103" => [
        "name" => "Ahmed Raza",
        "department" => "IT",
        "salary" => 75000
    ]
];

foreach($employees as $key=>$v1)
{
   echo $key . " ";
   foreach($v1 as $v2 ){
    echo $v2 . " ";
   }
   echo "<br>";
}

?>