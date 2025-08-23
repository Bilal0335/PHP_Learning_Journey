<?php
echo "<h2>1️⃣ Skip number 5 using continue</h2>";
for ($i = 1; $i <= 10; $i++) {
    if ($i == 5) {
        continue; // skip 5
    }
    echo $i . "<br>";
}
echo "<hr>";

echo "<h2>2️⃣ Stop loop at 7 using break</h2>";
for ($i = 1; $i <= 10; $i++) {
    if ($i == 7) {
        break; // stop loop
    }
    echo $i . "<br>";
}
echo "<hr>";

echo "<h2>3️⃣ Print only even numbers using continue</h2>";
for ($i = 1; $i <= 10; $i++) {
    if ($i % 2 != 0) {
        continue; // skip odd numbers
    }
    echo $i . "<br>";
}
echo "<hr>";

echo "<h2>4️⃣ Nested loop with break in inner loop</h2>";
for ($i = 1; $i <= 3; $i++) {
    for ($j = 1; $j <= 5; $j++) {
        if ($j == 4) {
            break; // stops inner loop only
        }
        echo "i=$i, j=$j<br>";
    }
    echo "End of row $i<br>";
}
echo "<hr>";

echo "<h2>5️⃣ Nested loop with continue in inner loop</h2>";
for ($i = 1; $i <= 3; $i++) {
    for ($j = 1; $j <= 5; $j++) {
        if ($j == 3) {
            continue; // skip j=3
        }
        echo "i=$i, j=$j<br>";
    }
    echo "End of row $i<br>";
}
echo "<hr>";

echo "<h2>6️⃣ Combined break and continue</h2>";
for ($i = 1; $i <= 10; $i++) {
    if ($i == 4) {
        continue; // skip 4
    }
    if ($i == 8) {
        break; // stop at 8
    }
    echo $i . "<br>";
}
echo "<hr>";
?>