<?php
    // funtion_return.php
    function hello($name="First",$lastName="last"){
        $res = "$name $lastName";

        return $res;
    }
    // echo hello("Bilal","Khan")
    $name = hello("Bilal","Khan");
    echo "Hello ".$name;




    function sum($en,$math,$computrer){
        $s = $en + $math + $computrer;
    }
?>