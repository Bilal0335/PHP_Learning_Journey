<?php

$a = 10;
$b = 110;

// Normal if-else curly braces ke sath
// if ($a <= $b) {
//     echo "Monday<br>";
// }
// echo "here is another statement";

// Alternate syntax (if ... endif;)
if ($a <= $b):       # yahan ":" curly brace { ki jagah use hota hai
    echo "Monday<br>";
endif;               # yahan "endif;" curly brace } ki jagah use hota hai

echo "here is another statement";

// Summary of alternate syntax:
// { → replace hota hai ":" se
// } → replace hota hai "endif;", "endforeach;", "endwhile;", "endswitch;" se

?>

<?php if ($a <= $b): ?>
<!-- HTML + PHP mix karte waqt alternate syntax readable lagta hai -->
<h1>Today is Monday</h1> <!-- Agar condition true hogi to ye HTML show hoga -->
<?php endif; ?>
<!-- Yahan block properly close karna lazmi hai -->