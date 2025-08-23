<?php
// ---------------- Main Heading ----------------
echo "<h1 style='color:blue; text-align:center;'>PHP Functions Practice (With Parameters)</h1>";


// ---------------- Example 1: Function with One Parameter ----------------
function greet($name) {
    echo "Hello, " . $name . "<br>";
}

echo "<h3>Example 1: Function with One Parameter</h3>";
greet("Bilal");
greet("Ayesha");
greet("Hassan");


// ---------------- Example 2: Function with Two Parameters ----------------
function fullName($firstName, $lastName) {
    echo "Full Name: " . $firstName . " " . $lastName . "<br>";
}

echo "<h3>Example 2: Function with Two Parameters</h3>";
fullName("Bilal", "Hussain");
fullName("Ahmed", "Khan");


// ---------------- Example 3: Sum of Two Numbers ----------------
function sum($a, $b) {
    echo "Sum of $a + $b = " . ($a + $b) . "<br>";
}

echo "<h3>Example 3: Sum Function</h3>";
sum(10, 20);
sum(50, 75);


// ---------------- Example 4: Multiplication of Two Numbers ----------------
function multiply($x, $y) {
    echo "Multiplication of $x * $y = " . ($x * $y) . "<br>";
}

echo "<h3>Example 4: Multiplication Function</h3>";
multiply(5, 3);
multiply(12, 4);


// ---------------- Example 5: Check Even or Odd ----------------
function checkEvenOdd($number) {
    if ($number % 2 == 0) {
        echo "$number is Even<br>";
    } else {
        echo "$number is Odd<br>";
    }
}

echo "<h3>Example 5: Check Even or Odd</h3>";
checkEvenOdd(10);
checkEvenOdd(7);


// ---------------- Example 6: Print Table of Any Number ----------------
function printTable($num) {
    for ($i = 1; $i <= 10; $i++) {
        echo "$num x $i = " . ($num * $i) . "<br>";
    }
}

echo "<h3>Example 6: Print Table of Any Number</h3>";
printTable(3);   // Table of 3
echo "<br><br>";
printTable(7);   // Table of 7
echo "<br><br>";

?>