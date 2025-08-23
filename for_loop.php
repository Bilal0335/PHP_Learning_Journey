<?php

// ================================
// PHP For Loop Practice Workbook
// ================================

// ------------------------------
// 0️⃣ For Loop Syntax Explanation
// ------------------------------
echo "<h3>0. For Loop Syntax in PHP</h3>";
echo "<pre>
for (initialization; condition; increment/decrement) {
    // Code to execute in each iteration
}

- initialization → Loop ka starting value set karte hain.
- condition → Jab tak yeh condition true hai, loop chalega.
- increment/decrement → Har iteration ke baad variable ko increase ya decrease karte hain.
</pre>";
echo "<hr>";


// 1️⃣ Counting 1 to 10
echo "<h3>1. Counting 1 to 10</h3>";
for ($i = 1; $i <= 10; $i++) {
    echo $i . ". Hello Bilal <br>";
}
echo "<hr>";

// 2️⃣ Counting 10 to 1
echo "<h3>2. Counting 10 to 1</h3>";
for ($i = 10; $i >= 1; $i--) {
    echo $i . ". Hello Bilal <br>";
}
echo "<hr>";

// 3️⃣ Even Numbers 2 to 20
echo "<h3>3. Even Numbers 2 to 20</h3>";
for ($i=2; $i <=20 ; $i+=2) { 
    echo $i.".<p>Even Numbers</p>";
}
echo "<hr>";


// 3️⃣ Even Numbers 2 to 20
echo "<h3>3. Even Numbers 2 to 20</h3>";
for ($i = 2; $i <= 20; $i += 2) {
    echo $i . "<br>";
}
echo "<hr>";

// 4️⃣ Odd Numbers 1 to 19
echo "<h3>4. Odd Numbers 1 to 19</h3>";
for ($i = 1; $i <= 19; $i += 2) {
    echo $i . "<br>";
}
echo "<hr>";



// 5️⃣ Multiplication Table of 5
echo "<h3>5. Multiplication Table of 5</h3>";
for ($i=1; $i <=10 ; $i++) { 
    echo "5 x $i = ". (5*$i)."<br>";
}

echo "<hr>";


?>