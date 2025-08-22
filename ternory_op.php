<?php
echo "======== Ternary Operator Examples =======<br><br>";

// ! ======= Ternary Operator Syntax Explanation ======
// Syntax:
// (condition) ? value_if_true : value_if_false;
// (condition) → Jo condition check karni hai (true/false)
// value_if_true → Agar condition true ho to ye value return hogi
// value_if_false → Agar condition false ho to ye value return hogi

// ============= Example 1 — Value check =============
$x = 10;
$z = "Value is: ".($x > 20 ? "Greater" : "Smaller"); // Agar $x > 20 true, "Greater"; else "Smaller"
echo $z . "<br>";

// ============= Example 2 — Even / Odd =============
$num = 7;
echo "Number $num is: ".($num % 2 == 0 ? "Even" : "Odd") . "<br>";

// ======= Example 3 — Positive / Negative / Zero =======
$num = -3;
echo "Number $num is: ".($num > 0 ? "Positive" : ($num < 0 ? "Negative" : "Zero")) . "<br>";

// ============= Example 4 — Age Check =============
$age = 18;
echo "Age $age: ".($age >= 18 ? "Adult" : "Minor") . "<br>";

// =========== Example 5 — Max of Two Numbers ===========
$a = 10;
$b = 20;
echo "Max of $a and $b is: ".($a > $b ? $a : $b) . "<br>";

// =========== Example 6 — Grade Assignment ===========
$marks = 75;
$grade = ($marks >= 80) ? "A+" :
         (($marks >= 70) ? "A" :
         (($marks >= 60) ? "B" :
         (($marks >= 50) ? "C" : "Fail"))); // Nested ternary example
echo "Marks: $marks, Grade: $grade<br>";

// =========== Example 7 — Weekday / Weekend ===========
$day = 3;
echo "Day $day is: ".($day == 6 || $day == 7 ? "Weekend" : "Weekday") . "<br>";

// ============= Example 8 — Workload Check =============
$weekday = 5;
$workload = 6;
echo "Today is ".($weekday >=6 ? "Weekend" : ($workload > 5 ? "Heavy workload" : "Moderate workload")) . "<br>";

// ============= Example 9 — Discount Check =============
$price = 150;
echo "Price $price: ".($price > 100 ? "Discount applied" : "No discount") . "<br>";

// ============= Example 10 — Login Check =============
$username = "admin";
$password = "1234";
$login = ($username == "admin" && $password == "1234") ? "Login Successful" : "Login Failed";
echo $login . "<br>";

?>