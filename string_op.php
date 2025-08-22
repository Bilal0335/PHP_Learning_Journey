<?php
echo "================= PHP String Operators Practice =================<br><br>";

// ======== String Operators Explanation ========
// .   → Concatenate strings (join two strings)
// .=  → Concatenate and assign (append to variable)


// ======== Example 1 — Basic Concatenation ========
$a = "PHP";
$b = " is";
$c = " awesome!";
echo "Example 1: " . $a . $b . $c . "<br>"; // Output: PHP is awesome!
// Here . operator is used to join multiple strings

// ======== Example 2 — Append using .= ========
$msg = "Learning";
$msg .= " PHP";       // Append " PHP" to $msg
$msg .= " is fun!";   // Append " is fun!" to $msg
echo "Example 2: " . $msg . "<br>"; // Output: Learning PHP is fun!
// .= operator appends value to the existing variable

// ===== Example 3 — Concatenate number and string =====
$version = "PHP version ";
$version .= 8;       // Number 8 is converted to string and appended
echo "Example 3: " . $version . "<br>"; // Output: PHP version 8

// ==== Example 4 — Combine variables in a sentence ====
$name = "Bilal";
$age = 20;
$info = $name . " is " . $age . " years old.";
echo "Example 4: " . $info . "<br>"; // Output: Bilal is 20 years old.
// Using . operator to join multiple variables and strings

// ======== Example 5 — Multiple .= ========
$text = "I";
$text .= " love";
$text .= " coding";
$text .= " in PHP!";
echo "Example 5: " . $text . "<br>"; // Output: I love coding in PHP!
// Using .= repeatedly to append multiple strings

// ======== Example 6 — Original example ========
$s = "hello";
$s .= " world!";   // Append string
$s .= 700;         // Append number as string
echo "Example 6: " . $s . "<br>"; // Output: hello world!700

// ======== Example 7 — Using .= in a loop ========
$sentence = "Numbers: ";
for ($i = 1; $i <= 5; $i++) {
    $sentence .= $i . " ";  // Append numbers with space
}
echo "Example 7: " . $sentence . "<br>"; // Output: Numbers: 1 2 3 4 5 

//===Example 8 — Concatenating with special characters ===
$line = "This is line 1";
$line .= "\nThis is line 2"; // Append newline
$line .= "\nThis is line 3";
echo nl2br($line); // nl2br converts \n to <br> for browser

// ===== Example 9 — Combining variables and strings ====
$city = "Karachi";
$country = "Pakistan";
$location = $city . ", " . $country;  // Using . to join variables with string
echo "<br>Example 9: " . $location . "<br>"; // Output: Karachi, Pakistan

// ======== Example 10 — Nested concatenation ========
$greeting = "Hello";
$greeting .= ", " . $name . "!"; // .= to append string + variable
echo "Example 10: " . $greeting . "<br>"; // Output: Hello, Bilal!

?>