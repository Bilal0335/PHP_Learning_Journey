<?php
    
    // Variable declare kiye
    $name = "M. Bilal Hussain <br>";   # String value
    $number = 1223;                    # Integer value


    // echo $name;   # Ye line comment ki gayi hai, is liye run nahi hogi

    // String concatenation (.) use karke <h1> tag ke andar name print karna
    echo "<h1>" . $name . "</h1>";     
    // Output: <h1>M. Bilal Hussain <br></h1>

    // Text ke sath variable concatenate karna
    echo "Hello how are you: " . $name; 
    // Output: Hello how are you: M. Bilal Hussain <br>

    // Number print karna
    echo $number;   
    // Output: 1223

    // echo $name;   # Ye bhi comment hai, run nahi hoga
?>