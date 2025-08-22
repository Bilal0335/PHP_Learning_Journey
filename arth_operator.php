<?php
// ---------------- Addition ----------------
$x = 1;
$y = 3;
$c = $x + $y;   // $c = 1 + 3 = 4
echo "Sum: ". $c . "<br>";

// ---------------- Subtraction ----------------
$x = 1;
$y = 3;
$c = $x - $y;   // $c = 1 - 3 = -2
echo "Subtract: ". $c . "<br>";

// ---------------- Division ----------------
$x = 21;
$y = 13;
$c = $x / $y;   // $c = 21 / 13 ≈ 1.615
echo "Divide: ". $c . "<br>";

// ---------------- Multiplication ----------------
$x = 21;
$y = 13;
$c = $x * $y;   // $c = 21 * 13 = 273
echo "Multiply: ". $c . "<br>";

// ---------------- Modulus (Remainder) ----------------
$x = 10;
$y = 3;
$c = $x % $y;   // $c = 10 % 3 = 1 (remainder)
echo "Remainder: ". $c . "<br>";

// ---------------- Exponent (Power) ----------------
$x = 10;
$y = 3;
$c = $x ** $y;  // $c = 10^3 = 1000
echo "Power: ". $c . "<br>";

// ---------------- Increment ----------------
$x = 10;

$a = $x++;      // Post-increment: $a = 10, then $x = 11
$b = ++$x;      // Pre-increment: $x = 12, $b = 12

echo "Post-increment result (a): $a <br>"; 
echo "Pre-increment result (b): $b <br>";
echo "Final x: $x <br>";

// ---------------- Decrement ----------------
$x = 5;

$a = $x--;      // Post-decrement: $a = 5, then $x = 4
$b = --$x;      // Pre-decrement: $x = 3, $b = 3

echo "Post-decrement result (a): $a <br>";
echo "Pre-decrement result (b): $b <br>";
echo "Final x after decrement: $x <br>";
?>