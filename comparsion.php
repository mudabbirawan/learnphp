<?php

$a = 10;
$b = 10;
// Equal (value)
echo "$a == $b<br>";  // Output: 10 == 10

$a = 10;
$b = "10";
// Equal (value only)
echo ($a == $b) . "<br>";  // Output: 1 (true)

$a = 10;
$b = "10";
// Strict equal (value + type)
echo ($a === $b) . "<br>";  // Output: (false, so blank)

$a = 10;
$b = 20;
// Not equal (value)
echo ($a != $b) . "<br>";  // Output: 1 (true)

$a = 10;
$b = "10";
// Strict not equal (value or type)
echo ($a !== $b) . "<br>";  // Output: 1 (true)

$a = 10;
$b = 5;
// Greater than
echo ($a > $b) . "<br>";  // Output: 1 (true)

$a = 10;
$b = 20;
// Less than
echo ($a < $b) . "<br>";  // Output: 1 (true)

$a = 10;
$b = 10;
// Greater than or equal to
echo ($a >= $b) . "<br>";  // Output: 1 (true)

$a = 10;
$b = 15;
// Less than or equal to
echo ($a <= $b) . "<br>";  // Output: 1 (true)

?>
