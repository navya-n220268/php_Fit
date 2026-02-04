<?php
    echo "<h2>Variables</h2>";
    $name = "Navyasri";
    $age = 19;
    $cgpa= 8.6;
    $isStudent = true;
    $subjects = array("Web technology", "Data Science", "AI", "Machine Learning");

    echo "<h2>Variable Datatypes</h2>";
    echo "Name: " . $name . "<br>";
    echo "Age: " . $age . "<br>";   
    echo "CGPA: " . $cgpa . "<br>";
    echo "Boolean: " .$isStudent . "<br>";
    echo "Subjects: ".implode(", ", $subjects). "<br>";

    echo "<hr>";
    echo "<h2>Scope of the variables</h2>"; 
    echo "<h3>Local scope</h3>";
    function localScope() {
        $a=25;
        echo "The value of a is: " . $a . "<br>";
    }
    localScope();
    //echo "The value of a outside function is: " . $a . "<br>"; // error

    echo "<h3>Global scope</h3>";
    $b = 50;
    function globalScope() {
        global $b; //Without this,Error occurs
        echo "The value of b is: " . $b . "<br>";
    }
    globalScope();
    echo "The value of b outside function is: " . $b . "<br>";


    echo "<h3>Static scope</h3>";
    function staticScope() {        
        static $c = 0;
        $d=10;
        echo "The value of c is: " . $c . "<br>";
        echo "The value of d is: " . $d . "<br>";
        $c++;
        $d++;
    }
    staticScope();
    staticScope();
    staticScope();
?>
