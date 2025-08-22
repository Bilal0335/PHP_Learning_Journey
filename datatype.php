<?php
    
// Different data types in PHP
$name = "Bilal Hussain";                  # String
$num = 344;                               # Integer
$float_num = 344.66;                      # Float / Double
$is_bool = true;                          # Boolean
$array_str = array("apple",'mango','banana'); # Array
$null = null;                             # NULL value

// ----- Simple echo -----
echo $name . "<br>";        # Output: Bilal Hussain
echo $num . "<br>";         # Output: 344
echo $float_num . "<br>";   # Output: 344.66
echo $is_bool . "<br>";     # Output: 1 (true ko PHP '1' print karta hai)

// ----- Arrays -----
// Array ko direct echo nahi kar sakte, warna "Array to string conversion" error aayega
// Is liye print_r() ya var_dump() use karte hain
echo "<pre>";               # <pre> tag output ko readable format me show karega
// print_r($array_str);     # Simple readable array print
var_dump($array_str);       # Detailed output with type + length
echo "</pre>";

// ----- NULL -----
echo $null . "<br>";        # NULL echo karne par kuch bhi show nahi hota

echo "<hr>";                # Horizontal line separator

// ----- Detailed output using var_dump -----
var_dump($name);        # string(13) "Bilal Hussain"
echo "<br>";
var_dump($num);         # int(344)
echo "<br>";
var_dump($float_num);   # float(344.66)
echo "<br>";
var_dump($is_bool);     # bool(true)
echo "<br>";
var_dump($array_str);   # array(3) { [0]=> string(5) "apple" ... }
echo "<br>";
var_dump($null);        # NULL

?>