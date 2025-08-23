<?php
// ------------ PHP Function Syntax (Without Parameters) ----------
// function functionName() { # function definition
    // Code to be executed
// }
// functionName() # calling a function

// ---------------- Main Heading ----------------
echo "<h1 style='color:blue; text-align:center;'>Functions in PHP</h1>";


// ---------------- Example 1: Simple Function ----------------
function myName() {  
    echo "Hello My name is Bilal<br>";
}

echo "<h3>Example 1: Simple Function (myName)</h3>";
myName();
myName();
myName();


// ---------------- Example 2: Print Today's Date ----------------
function showDate() {
    echo "Today's date is: " . date("d-m-Y") . "<br>";
}

echo "<h3>Example 2: Show Today's Date (showDate)</h3>";
showDate();


// ---------------- Example 3: Print a Line Break ----------------
function lineBreak() {
    echo "-----------------------------<br>";
}

echo "<h3>Example 3: Line Break Function (lineBreak)</h3>";
lineBreak();
lineBreak();


// ---------------- Example 4: Print a Table of 5 ----------------
function tableOfFive() {
    for ($i = 1; $i <= 10; $i++) {
        echo "5 x $i = " . (5 * $i) . "<br>";
    }
}

echo "<h3>Example 4: Table of 5 (tableOfFive)</h3>";
tableOfFive();


// ---------------- Example 5: Greeting Message ----------------
function welcomeMessage() {
    echo "Welcome to PHP Practice Functions!<br>";
}

echo "<h3>Example 5: Greeting Message (welcomeMessage)</h3>";
welcomeMessage();
?>