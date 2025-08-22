<?php
    // Comparison Operators

    $x = 10;
    $y = 20;

    // Equal to (==)
    echo "x == y : "; 
    echo ($x == $y ? "true" : "false") . "<br>";

    // Identical (===)
    echo "x === y : "; 
    echo ($x === $y ? "true" : "false") . "<br>";

    // Not Equal (!= or <>)
    echo "x != y : "; 
    echo ($x != $y ? "true" : "false") . "<br>";

    echo "x <> y : "; 
    echo ($x <> $y ? "true" : "false") . "<br>";

    // Not Identical (!==)
    echo "x !== y : "; 
    echo ($x !== $y ? "true" : "false") . "<br>";

    // Greater than (>)
    echo "x > y : "; 
    echo ($x > $y ? "true" : "false") . "<br>";

    // Less than (<)
    echo "x < y : "; 
    echo ($x < $y ? "true" : "false") . "<br>";

    // Greater than or equal to (>=)
    echo "x >= y : "; 
    echo ($x >= $y ? "true" : "false") . "<br>";

    // Less than or equal to (<=)
    echo "x <= y : "; 
    echo ($x <= $y ? "true" : "false") . "<br>";

    // Spaceship Operator (<=>)
    echo "x <=> y : "; 
    echo ($x <=> $y) . "<br>";  // -1, 0, or 1


    // pratice work
    $a = 10;
    $b = 110;
    
    echo $a <=> $b;

    echo 5 <=> 10;   // -1 (5 chhota hai 10 se)
    echo 10 <=> 10;  // 0  (dono equal hain)
    echo 15 <=> 10;  // 1  (15 bada hai 10 se)


    
?>