<?php


## 1) Passing by Value (copy ban jati hai)

// ```php
// function wow($a){
//     $a = "World";   // function ke andar value change
// }

// $str = "Hello";     // original variable
// wow($str);

// echo $str;          // kya print hoga?
// ```

// ### Step by Step Workflow:

// 1. `$str = "Hello";`

//    ```
//    Memory:
//    $str → "Hello"
//    ```

// 2. Jab `wow($str)` call hota hai:

//    * `$str` ki **copy** function ke andar `$a` me chali jati hai.
//    * Ab `$a = "Hello"` (copy of \$str).

// 3. Function ke andar `$a = "World";` likha:

//    ```
//    Memory:
//    $a → "World"   (sirf copy change hui)
//    $str → "Hello" (asli unchanged)
//    ```

// 4. Function khatam hone ke baad `$a` delete ho jata hai.

//    * `$str` abhi bhi `"Hello"` hai.

// 👉 Output:

// ```
// Hello
// ```

// ---

// ## 2) Passing by Reference (original address jata hai)

// ```php
// function wow(&$a){
//     $a = "World";   // function ke andar value change
// }

// $str = "Hello";     // original variable
// wow($str);

// echo $str;          // kya print hoga?
// ```

// ### Step by Step Workflow:

// 1. `$str = "Hello";`

//    ```
//    Memory:
//    $str → "Hello"
//    ```

// 2. Jab `wow($str)` call hota hai:

//    * `&` ka matlab: `$a` aur `$str` **same memory location ko point karte hain**.
//    * Matlab `$a` ek **alias** ban gaya `$str` ka.

// 3. Function ke andar `$a = "World";`

//    ```
//    Memory:
//    $a → "World"
//    $str → "World"  (kyunki dono same jagah point karte hain)
//    ```

// 4. Function khatam hone ke baad bhi `$str` change ho chuka hai.

// 👉 Output:

// ```
// World
// ```

// ---

// ## 🎯 Simple Samajh Lo:

// * **By Value** → Copy jati hai → asli variable safe rehta hai.
// * **By Reference** → Address jata hai → asli variable change ho jata hai.

// ---


?>

<?php

// echo "============================\n";
// echo " Example 1: Passing By Value\n";
// echo "============================\n";

// function addFiveValue($num){
//     $num = $num + 5;   // sirf copy change hoti hai
//     echo "Inside function (by value): $num\n";
// }

// $marks1 = 50;
// echo "Before function call: $marks1\n";
// addFiveValue($marks1);
// echo "After function call:  $marks1\n";


// echo "\n======================\n";
// echo " Example 2: Passing By Reference\n";
// echo "========================\n";

// function addFiveReference(&$num){
//     $num = $num + 5;   // asli variable change ho jayega
//     echo "Inside function (by reference): $num\n";
// }

// $marks2 = 50;
// echo "Before function call: $marks2\n";
// addFiveReference($marks2);
// echo "After function call:  $marks2\n";


// function testing(&$string){
//     $string .= " and something extra";
// }

// $str = "This is a string";
// testing($str);
// echo $str;

// function first($num)
// {
//     $num += 5;
// }

// function second(&$num)
// {
//     $num += 5;
// }


// $num = 10;
// first($num);
// echo "Origional Value is $num <br/>";
// second($num);
// echo "Origional Value is $num <br/>";
?>

<?php

function first($num)
{
    $num += 5;   // yahan sirf copy change hogi
}

function second(&$num)
{
    $num += 5;   // yahan asli variable change hoga
}

$num = 10;

first($num);   // By Value
echo "Origional Value is $num <br/>";

second($num);  // By Reference
echo "Origional Value is $num <br/>";

?>

<?php

// ---------------- Numbers Example ----------------
function increaseByTen($x) {
    $x += 10;   // By Value (copy change hogi)
}

function increaseByTenRef(&$x) {
    $x += 10;   // By Reference (asli change hoga)
}

$number = 20;

increaseByTen($number);
echo "After increaseByTen (by value): $number <br/>";   // still 20

increaseByTenRef($number);
echo "After increaseByTenRef (by reference): $number <br/>";  // now 30



// ---------------- Strings Example ----------------
function changeWord($word) {
    $word = "World";   // By Value (copy change hogi)
}

function changeWordRef(&$word) {
    $word = "World";   // By Reference (asli change hoga)
}

$text = "Hello";

changeWord($text);
echo "After changeWord (by value): $text <br/>";   // still Hello

changeWordRef($text);
echo "After changeWordRef (by reference): $text <br/>";  // now World

?>