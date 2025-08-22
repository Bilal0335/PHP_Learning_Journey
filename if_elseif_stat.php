<?php

// $per = 515;  
// $grade = "";

// if ($per >= 80 and $per <= 100) {
//     echo "You're in merit list<br>";
//     $grade = "A+";
// } elseif ($per >= 60 and $per < 80) {
//     echo "First Division<br>";
//     $grade = "A";
// } elseif ($per >= 45 and $per < 60) {
//     echo "Second Division<br>";
//     $grade = "B";
// } elseif ($per >= 35 and $per < 45) {
//     echo "Third Division<br>";
//     $grade = "C";
// } elseif ($per > 0 and $per < 35) {
//     echo "Fail<br>";
//     $grade = "F";
// } else {
//     echo "Please enter a valid percentage<br>";
//     $grade = "Invalid";
// }

// echo "Your Grade is: " . $grade;

?>

<?php

$per = 5;   // percentage
$grade = "";  // empty grade variable

if ($per >= 80 and $per <= 100):
    echo "You're in merit list<br>";
    $grade = "A+";
elseif ($per >= 60 and $per < 80):
    echo "First Division<br>";
    $grade = "A";
elseif ($per >= 45 and $per < 60):
    echo "Second Division<br>";
    $grade = "B";
elseif ($per >= 35 and $per < 45):
    echo "Third Division<br>";
    $grade = "C";
elseif ($per > 0 and $per < 35):
    echo "Fail<br>";
    $grade = "F";
else:
    echo "Please enter a valid percentage<br>";
    $grade = "Invalid";
endif;

echo "Your Grade is: " . $grade;

?>