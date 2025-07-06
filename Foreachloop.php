<?php
 
 $color=["red","blue","green","orange","white"];

 foreach($color  as $value){
    echo $value ."<br>";
 }


$person = [
    "name" => "Ali",
    "age" => 30,
    "city" => "Karachi"
];


echo "<ul>";
foreach ($person as $key => $value) {
    echo "<li>$key = $value</li>";
}
echo "</ul>";


//for each loop for list()
//index array

$emp=[

    [1,"mudabbir","manager",50000],
    [2,"salmam","saleman",30000],
    [3,"amir","computer opterator",12000],
    [4,"ali","drive",3000],

];

echo "<table  border='2px'>  
   <tr>
     <th>id</th>
      <th>name</th>
       <th>desginatiom</th>
        <th>Salary</th>
   </tr>
";


foreach($emp as list($id,$name,$desgination,$salery)){
    echo "<tr><td>$id</td><td>$name</td><td>$desgination</td><td>$salery</td> <r>";
}
echo "</table>";

$employee=[
    [
        "id"=>1,
        "name"=>"mudabbir",
        "Desgination"=>"manager",
        "Salary"=>50000,
    ],
       [
        "id"=>2,
        "name"=>"salman",
        "Desgination"=>"saleman",
        "Salary"=>30000,
       ],
       [
        "id"=>3,
        "name"=>"amir",
        "Desgination"=>"computer operator",
        "Salary"=>12000,
       ],
       [
        "id"=>4,
        "name"=>"ali",
        "Desgination"=>"drive",
        "Salary"=>5000,
       ],
     [
        "id"=>5,
        "name"=>"anwar",
        "Desgination"=>"drive",
        "Salary"=>5000,
    ]
    ];

echo "<table  border='2px'>  
   <tr>
     <th>id</th>
      <th>name</th>
       <th>desginatiom</th>
        <th>Salary</th>
   </tr>
";

foreach($employee as list("id"=>$id,"name"=>$name,"Desgination"=>$desgination,"Salary"=>$salery)){
    echo "<tr><td>$id</td><td>$name</td><td>$desgination</td><td>$salery</td> <r>";
}
echo "</table>";
    
?>