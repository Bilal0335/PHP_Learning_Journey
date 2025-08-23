<?php
echo "<h2>Basic Goto Example</h2>";
for ($i = 1; $i <= 10; $i++) {
    if ($i == 3) {
        goto abc;  // jump to label abc
    }
    echo "Number: $i<br>";
}
echo "Hello world<br>";

abc: 
echo "You reached the label abc.<br>";
echo "End of program.<br><hr>";

echo "<h2>1️⃣ Jump to end when number is 5</h2>";
for ($i = 1; $i <= 10; $i++) {
    if ($i == 5) {
        goto end1;
    }
    echo "$i<br>";
}
end1:
echo "Reached the end using goto.<br><hr>";

echo "<h2>2️⃣ Skip a block of code</h2>";
goto skip;

echo "This line will be skipped.<br>";
echo "This line too.<br>";

skip:
echo "We jumped over the code!<br><hr>";

echo "<h2>3️⃣ Exit nested loops when condition met</h2>";
for ($i = 1; $i <= 5; $i++) {
    for ($j = 1; $j <= 5; $j++) {
        if ($i + $j == 6) {
            goto exit_loops;
        }
        echo "$i,$j<br>";
    }
}
exit_loops:
echo "Exited nested loops using goto.<br><hr>";

echo "<h2>4️⃣ Combined with continue and break logic</h2>";
for ($i = 1; $i <= 10; $i++) {
    if ($i == 3) continue; // skip 3
    if ($i == 7) goto end4; // exit loop at 7
    echo "$i<br>";
}
end4:
echo "Exited the loop using goto.<br>";
?>