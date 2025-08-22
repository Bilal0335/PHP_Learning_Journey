<?php
// ---------------- Variables ----------------

// Variable ko baar-baar change kar sakte ho
$num = 44;      # Pehli value
$num = 45;      # Update kiya
echo $num;      # Output: 45

echo "<hr>";


// ---------------- Constants ----------------

// Constant ek baar define ho jata hai to change nahi hota
define("test", 50);    # "test" constant ban gaya
// define("test", 540);  # ❌ Error: Constant already defined

echo test;   # Output: 50

echo "<hr>";


// ---------------- Constant Naming Rules ----------------

// ✅ Constants ka naam letter ya underscore se start hona chahiye
define("_test", 100);
echo _test;   # Output: 100

echo "<br>";

// ❌ Number se start nahi kar sakte
// define("9test", 50);
// echo 9test;   # Syntax Error


// ----- Constant in Expressions -----
define("VALUE", 50);      # Constant VALUE = 50
$sum = VALUE + 20;        # Constants ko calculation me use kar sakte ho
echo "SUM: " . $sum;      # Output: SUM: 70

?>