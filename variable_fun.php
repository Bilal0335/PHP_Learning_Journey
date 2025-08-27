<?php
// ================================================
// 🔹 Variable Functions in PHP
// ================================================
// PHP me variable function ka matlab hai ke aap 
// function ka naam ek variable me store karke usko 
// dynamically call kar sakte ho.
// ================================================


// ---------------- Example 1: Simple Function ----------------
function wow() {
    return "Hello from WOW!";
}

$fun = "wow";  
echo "Example 1 Output: " . $fun() . "<br/>";  
// Same as wow();


// ---------------- Example 2: Multiple Functions ----------------
function add($a, $b) {
    return $a + $b;
}
function sub($a, $b) {
    return $a - $b;
}

$operation = "add";
echo "Example 2 Output (add): " . $operation(10, 5) . "<br/>";  

$operation = "sub";
echo "Example 2 Output (sub): " . $operation(10, 5) . "<br/>";  


// ---------------- Example 3: Conditional Function Call ----------------
function greetMorning() {
    return "Good Morning!";
}
function greetEvening() {
    return "Good Evening!";
}

$time = "evening"; 

if ($time == "morning") {
    $greet = "greetMorning";
} else {
    $greet = "greetEvening";
}

echo "Example 3 Output: " . $greet() . "<br/>";  



// ---------------- Example 4: Another Simple Demo ----------------
function hello() {
    return "Hello World!";
}
function bye() {
    return "Goodbye!";
}

$call = "hello";
echo "Example 4 Output (hello): " . $call() . "<br/>";

$call = "bye";
echo "Example 4 Output (bye): " . $call() . "<br/>";

// ---------------- Example 5: Anonymous Function ----------------
// Function without name (Closure)
$anon = function($name) {
    return "Hello, " . $name . " (from Anonymous Function)";
};

echo "Example 5 Output: " . $anon("Bilal") . "<br/>";

 

?>