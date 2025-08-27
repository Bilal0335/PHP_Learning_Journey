<?php
// recursive_examples.php

/*
📘 Recursive Function Definition in PHP

Recursive function wo hota hai jo apne aap ko call kare.
Iska use tab hota hai jab ek problem ko chhote parts me tod kar solve karna ho.

👉 Har recursive function ke 2 parts hote hain:

1. Base Case (stop condition) → jaha recursion rukta hai
2. Recursive Case → function apne aap ko call karta hai
*/

// -------------------------------
// 📝 Example 1: Simple Counting
// -------------------------------
function display($number){
    if($number <= 5){   // Base Case
        echo "$number <br/>";
        display($number + 1);  // Recursive Case
    }
}

echo "<h3>Example 1: Counting</h3>";
display(1);

// -------------------------------
// 📝 Example 2: Factorial Calculation
// -------------------------------
// Formula: n! = n × (n-1) × (n-2) ... × 1

function factorial($num){
    if($num == 0 || $num == 1){   // Base Case
        return 1;
    } else {
        return $num * factorial($num - 1);  // Recursive Case
    }
}

echo "<h3>Example 2: Factorial</h3>";
echo "Factorial of 5 is: " . factorial(5) . "<br/>";  // Output: 120

// -------------------------------
// 📝 Example 3: Sum of Numbers
// -------------------------------
// Formula: 1 + 2 + 3 + ... + n

function sumNumbers($n){
    if($n == 0){   // Base Case
        return 0;
    } else {
        return $n + sumNumbers($n - 1);  // Recursive Case
    }
}

echo "<h3>Example 3: Sum of Numbers</h3>";
echo "Sum of first 5 numbers is: " . sumNumbers(5);  // Output: 15
?>