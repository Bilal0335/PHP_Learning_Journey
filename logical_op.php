<?php
// Logical Operators Examples

// ----------------- AND (&&) -----------------
$age = 12;

// && ka matlab hai dono conditions TRUE hon to hi result TRUE hoga
if ($age >= 18 && $age <= 21):
    // $age = 12 → 12 >= 18 ❌ false, 12 <= 21 ✅ true
    // (false && true) = false → ye block run nahi hoga
    echo "<h2>You are eligible</h2>";
endif;


// ----------------- AND (and) -----------------
// 'and' bhi same kaam karta hai jo '&&' karta hai, 
// bas iska operator precedence different hai (zyada tar cases me fark nahi padta).
$age = 20;

if ($age >= 18 and $age <= 21):
    // $age = 20 → 20 >= 18 ✅ true, 20 <= 21 ✅ true
    // (true and true) = true → block run hoga
    echo "<h2>You are eligible</h2>";
endif;


// ----------------- OR (||) -----------------
$age = 220;

// || ka matlab hai: ek bhi condition TRUE ho to result TRUE hoga
if ($age >= 18 || $age <= 21):
    // $age = 220 → 220 >= 18 ✅ true, 220 <= 21 ❌ false
    // (true || false) = true → block run hoga
    echo "<h2>Condition True hai</h2>";
else:
    echo "<h2>Condition False hai</h2>";
endif;


// ----------------- NOT (!) -----------------
$age = 24;

// ! ka matlab hai condition ko ulta kar do (negate)
if (!($age <= 18)):
    // $age = 24 → (24 <= 18) ❌ false
    // !false → ✅ true → block run hoga
    echo "<h2>Condition True hai</h2>";
else:
    echo "<h2>Condition False hai</h2>";
endif;


// ----------------- XOR -----------------
$age = 220;

// XOR ka matlab hai: exactly ek condition true ho to hi TRUE hoga
// Agar dono true ya dono false ho → FALSE hoga
if ($age >= 18 xor $age <= 21):
    // $age = 220 → 220 >= 18 ✅ true, 220 <= 21 ❌ false
    // (true xor false) = true → block run hoga
    echo "<h2>Condition True hai</h2>";
else:
    echo "<h2>Condition False hai</h2>";
endif;

?>