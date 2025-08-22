<?php
    
// $weekday = 3;


// switch ($weekday) {
//     case 1:
//         echo "Today is monday";
//         echo "<br> this is best day";
//         break;
//     case 2:
//         echo "Today is Tue";
//         break;
//     case 3:
//         echo "Today is Wed";
//         break;
//     case 4:
//         echo "Today is Thur";
//         break;
//     case 5:
//         echo "Today is Fri";
//         break;
//     case 6:
//         echo "Today is Sat";
//         break;
//     case 7:
//         echo "Today is Sun";
//         break;
    
//     default:
//         echo "Enter a valid week day.";
//         break;
// }

// switch ($weekday) {
//     case 1: case 2: case 3:
//         echo "Today is monday";
//         echo "<br> this is best day";
//         break;
//     case 4:
//         echo "Today is Thur";
//         break;
//     case 5:
//         echo "Today is Fri";
//         break;
//     case 6:
//         echo "Today is Sat";
//         break;
//     case 7:
//         echo "Today is Sun";
//         break;
    
//     default:
//         echo "Enter a valid week day.";
//         break;
// }


// $weekday = 61;
// $holiday = true;

// switch (true) {
//     case ($weekday >= 1 && $weekday <= 3 && !$holiday):
//         echo "Weekday and not a holiday";
//         break;
//     case ($weekday >= 1 && $weekday <= 3 && $holiday):
//         echo "Weekday but it's a holiday!";
//         break;
//     case ($weekday == 6 || $weekday == 7):
//         echo "Weekend!";
//         break;
//     default:
//         echo "Invalid day";
//         break;
// }

// $weekday = 7;
// $tasks = 4;

// switch ($weekday) {
//     case 1: case 2: case 3:
//         $tasks += 2; // tasks add karo
//         echo "You have $tasks tasks today.";
//         break;
//     case 4: case 5:
//         $tasks -= 1; // tasks kam karo
//         echo "You have $tasks tasks today.";
//         break;
//     case 6: case 7:
//         $tasks = 0; // weekend, no tasks
//         echo "No tasks, enjoy your weekend!";
//         break;
// }

// $weekday = 5;
// $workload = 6;

// switch (true) {
//     case ($workload > 5):
//         echo "Heavy workload today!";
//         break;
//     case ($workload <= 5 && $weekday < 6):  # (3<=5 and 7<6) -> f and t
//         echo "Moderate workload";
//         break;
//     case ($weekday >= 6):
//         echo "Weekend, relax!";
//         break;
// }
    
?>

<?php
// ============================
// Exercise 1 — Weekday Greeting
// ============================
$weekday = 3;

switch($weekday){
    case 1: case 2: case 3: case 4: case 5:
        echo "Weekday<br>";
        break;
    case 6: case 7:
        echo "Weekend<br>";
        break;
    default:
        echo "Invalid weekday<br>";
        break;
}

// ============================
// Exercise 2 — Tasks Assignment
// ============================
$tasks = 5;
switch($weekday){
    case 1: case 2: case 3: case 4: case 5:
        $tasks += 2;
        echo "Tasks today: $tasks<br>";
        break;
    case 6: case 7:
        $tasks = 0;
        echo "Tasks today: $tasks (Weekend)<br>";
        break;
}

// ============================
// Exercise 3 — Holiday Checker
// ============================
$isHoliday = false;

switch(true){
    case ($weekday >=1 && $weekday <=5 && !$isHoliday):
        echo "Workday<br>";
        break;
    case ($weekday >=1 && $weekday <=5 && $isHoliday):
        echo "Holiday on a weekday!<br>";
        break;
    case ($weekday == 6 || $weekday ==7):
        echo "Enjoy your weekend!<br>";
        break;
}

// ============================
// Exercise 4 — Workload Level
// ============================
$workload = 7;

switch(true){
    case ($workload > 5):
        echo "Heavy workload<br>";
        break;
    case ($workload >=3 && $workload <=5):
        echo "Moderate workload<br>";
        break;
    case ($workload <3):
        echo "Light workload<br>";
        break;
}

// ============================
// Exercise 5 — Salary Bonus
// ============================
$performanceScore = 85;
$salary = 2000;

switch(true){
    case ($performanceScore >=90):
        $salary *= 1.2;
        echo "Salary with bonus: $salary<br>";
        break;
    case ($performanceScore >=70 && $performanceScore <=89):
        $salary *= 1.1;
        echo "Salary with bonus: $salary<br>";
        break;
    case ($performanceScore <70):
        echo "No bonus. Salary: $salary<br>";
        break;
}

// ============================
// Exercise 6 — Grade Checker
// ============================
$marks = 72;

switch(true){
    case ($marks >= 80):
        echo "Grade: A+<br>";
        break;
    case ($marks >=70 && $marks <=79):
        echo "Grade: A<br>";
        break;
    case ($marks >=60 && $marks <=69):
        echo "Grade: B<br>";
        break;
    case ($marks >=50 && $marks <=59):
        echo "Grade: C<br>";
        break;
    case ($marks <50):
        echo "Fail<br>";
        break;
}

// ============================
// Exercise 7 — Age Category
// ============================
$age = 25;

switch(true){
    case ($age >=0 && $age <=12):
        echo "Child<br>";
        break;
    case ($age >=13 && $age <=19):
        echo "Teen<br>";
        break;
    case ($age >=20 && $age <=59):
        echo "Adult<br>";
        break;
    case ($age >=60):
        echo "Senior<br>";
        break;
    default:
        echo "Invalid age<br>";
        break;
}

// ============================
// Exercise 8 — Number Sign
// ============================
$num = -5;

switch(true){
    case ($num >0):
        echo "Positive<br>";
        break;
    case ($num <0):
        echo "Negative<br>";
        break;
    case ($num ==0):
        echo "Zero<br>";
        break;
}

// ============================
// Exercise 9 — Even/Odd
// ============================
$num = 12;

switch(true){
    case ($num %2 ==0):
        echo "Even number<br>";
        break;
    case ($num %2 !=0):
        echo "Odd number<br>";
        break;
}

// ============================
// Exercise 10 — Multiple Conditions
// ============================
$weekday = 4;
$isHoliday = false;
$workload = 6;

switch(true){
    case ($weekday >=1 && $weekday <=5 && $workload >5 && !$isHoliday):
        echo "Busy workday!<br>";
        break;
    case (($weekday ==6 || $weekday ==7) && $isHoliday):
        echo "Full relax day!<br>";
        break;
    case ($weekday >=1 && $weekday <=5 && $workload <=5):
        echo "Normal workday<br>";
        break;
    default:
        echo "Unknown situation<br>";
        break;
}
?>