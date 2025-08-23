<?php
echo "<h2>1️⃣ Numbers 1 to 100 Table</h2>";
echo "<table border='1' cellpadding='5' cellspacing='0'>";
for ($i = 1; $i <= 100; $i += 10) {
    echo "<tr>";
    for ($b = $i; $b < $i + 10; $b++) {
        echo "<td>$b</td>";
    }
    echo "</tr>";
}
echo "</table><hr>";

echo "<h2>2️⃣ Multiplication Table (1 to 10)</h2>";
echo "<table border='1' cellpadding='5' cellspacing='0'>";
for ($i = 1; $i <= 10; $i++) {
    echo "<tr>";
    for ($j = 1; $j <= 10; $j++) {
        echo "<td>" . ($i * $j) . "</td>";
    }
    echo "</tr>";
}
echo "</table><hr>";

echo "<h2>3️⃣ Right-Angled Triangle Numbers</h2>";
for ($i = 1; $i <= 5; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo $j . " ";
    }
    echo "<br>";
}
echo "<hr>";

echo "<h2>4️⃣ Pyramid Numbers</h2>";
$rows = 5;
for ($i = 1; $i <= $rows; $i++) {
    for ($j = $rows; $j > $i; $j--) {
        echo "&nbsp;&nbsp;";
    }
    for ($k = 1; $k <= $i; $k++) {
        echo $k . " ";
    }
    echo "<br>";
}
echo "<hr>";

echo "<h2>5️⃣ Right-Angled Star Triangle</h2>";
for ($i = 1; $i <= 5; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo "* ";
    }
    echo "<br>";
}
echo "<hr>";

echo "<h2>6️⃣ Pyramid of Stars</h2>";
for ($i = 1; $i <= 5; $i++) {
    for ($j = 5; $j > $i; $j--) {
        echo "&nbsp;&nbsp;";
    }
    for ($k = 1; $k <= $i * 2 - 1; $k++) {
        echo "* ";
    }
    echo "<br>";
}
echo "<hr>";
?>