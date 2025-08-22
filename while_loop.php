<?php
// ---------- 1. Decrement Loop ----------
$a = 12;
while ($a >= 1) {
    echo "$a. Hello!<br>";
    $a--;
}

// ---------- 2. Unordered List ----------
$a = 7;
echo "<h3>Unordered List Example</h3>";
echo "<ul>";
while ($a >= 1) {
    echo "<li>Hello! - Count: $a</li>";
    $a--;
}
echo "</ul>";

// ---------- 3. Ordered List ----------
$a = 5;
echo "<h3>Ordered List Example</h3>";
echo "<ol>";
while ($a >= 1) {
    echo "<li>Hello! - Count: $a</li>";
    $a--;
}
echo "</ol>";

// ---------- 4. Increment Table ----------
$a = 1;
$max = 5;

echo "<h3>While Loop in HTML Table (Increment)</h3>";
echo "<table border='1' cellpadding='5' cellspacing='0'>";
echo "<tr><th>Count</th><th>Message</th></tr>";

while ($a <= $max) {
    echo "<tr>
            <td>$a</td>
            <td>Hello!</td>
          </tr>";
    $a++;
}
echo "</table>";

// ---------- 5. Divisible by 3 Check ----------
$a = 1;
$max = 12;

while ($a <= $max) {
    if ($a % 3 == 0) {
        echo "<br>$a. Divisible by 3<br>";
    } else {
        echo "<br>$a. Not divisible by 3<br>";
    }
    $a++;
}

// ---------- 6. Numbers and Their Squares ----------
$a = 1;
$max = 12;

while ($a <= $max) {
    $square = $a * $a;
    echo "$a. Hello! - Square: $square<br>";
    $a++;
}
?>