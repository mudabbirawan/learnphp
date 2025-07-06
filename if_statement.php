<?php
$a = 25;
$b = 20;
if ($a < $b) {
    echo "A is smaller<br>";
}

$a = 25;
$b = 25;
if ($a == $b) {
    echo "A is equal<br>";
}

$a = 25;
$b = 25;
if ($a === $b) {
    echo "A is identical<br>";
}


$a = 45;
$b = 25;

if ($a != $b) {
    echo "A is not equal to B<br>";
}


$a = 25;
$b = 25;
if ($a !== $b) {
    echo "A is not identical to B<br>";
}


echo "Here is other statement<br><br>";

// if-else
$a = 45;
if ($a >30) {
    echo "A is greater<br>";
} else {
    echo "A is smaller<br>";
}

$a = 100;
if ($a == "100") {
    echo "A is same<br>";
} else {
    echo "A is not same<br>";
}

$a = 100;
if ($a === "100") {
    echo "A is same<br>";
} else {
    echo "A is not same<br>";
}

$name = "mudabbir";
$gender = "female";
if ($gender == "Male") {
    echo "Mr." . $name . "<br>";
} else {
    echo "Miss." . $name . "<br>";
}

$per = 75;
if ($per >= 80 && $per <= 100) {
    echo "You are in merit<br>";
} elseif ($per >= 60 && $per < 80) {
    echo "You are in 1st division<br>";
} elseif ($per >= 45 && $per < 60) {
    echo "You are in 2nd division<br>";
} elseif ($per >= 33 && $per < 45) {
    echo "You are in 3rd division<br>";
} elseif ($per < 33) {
    echo "You are in fail<br>";
} else {
    echo "Please enter your valid percentage<br>";
}

// ternary operator
$z = 30;
$z = "Value is: " . ($z >= 25 && $z <= 31 ? "Greater" : "Smaller");
echo $z . "<br>";






