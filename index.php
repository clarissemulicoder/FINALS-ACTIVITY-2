<?php

// ACTIVITY 1
echo "<h3>ACTIVITY 1: Basic Output</h3>";
echo "Name: Clarisse Muli <br>";
print "Course: BSIT <br><br>";


// ACTIVITY 2
echo "<h3>ACTIVITY 2: Multiple Outputs</h3>";
echo "Welcome!<br>";
echo "This is Coding PHP.<br>";
echo "Enjoy coding!<br><br>";


// ACTIVITY 3
echo "<h3>ACTIVITY 3: Declaring Variables</h3>";
$name = "Clarisse";
$age = 19;

echo "Name: " . $name . "<br>";
echo "Age: " . $age . "<br><br>";


// ACTIVITY 4
echo "<h3>ACTIVITY 4: Variable Rules</h3>";
$name = "Clarisse";
$age = 19;

echo $name . "<br>";
echo $age . "<br><br>";


// ACTIVITY 5
echo "<h3>ACTIVITY 5: Arithmetic Operators</h3>";
$a = 5;
$b = 7;

echo "Addition: " . ($a + $b) . "<br>";
echo "Subtraction: " . ($a - $b) . "<br>";
echo "Multiplication: " . ($a * $b) . "<br>";
echo "Division: " . ($a / $b) . "<br><br>";


// ACTIVITY 6
echo "<h3>ACTIVITY 6: Assignment Operators</h3>";
$x = 10;
$y = 5;

$x += $y;

echo "Output: " . $x . "<br><br>";


// ACTIVITY 7
echo "<h3>ACTIVITY 7: Comparison Operators</h3>";
$a = 3;
$b = 6;

var_dump($a > $b);
echo "<br>";
var_dump($a == $b);

echo "<br><br>";


// MINI PROJECT
echo "<h3>MINI PROJECT: Simple Calculator</h3>";

$num1 = 8;
$num2 = 4;

echo "Sum: " . ($num1 + $num2) . "<br>";
echo "Difference: " . ($num1 - $num2) . "<br>";
echo "Product: " . ($num1 * $num2) . "<br>";
echo "Quotient: " . ($num1 / $num2);

?>

