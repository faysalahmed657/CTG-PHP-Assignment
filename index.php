<?php
    // Age Identifier

    function ageIdentifier($age){
        if($age>60){
            echo "Aged Person";
        }
        else if($age>=35 && $age<=59){
            echo "Middle Aged Person";
        }
        else if($age>=15 && $age<=34){
            echo "Young Person";
        }
        else{
            echo "Junior";
        }
    }
    $Age= 35;
    ageIdentifier($Age);


    // Find out Rectangle, Square, Circle Area
    function areaIdentifier($area, $width, $length, $radius){
        if($area=='Rectangle'){
            echo "<br><br>Area of Rectangle: " . $width*$length;
        }
        else if($area=='Square'){
            echo "<br><br>Area of Square: " . $width*$length;
        }
        else if($area=='Circle'){
            echo "<br><br>Area of Circle: " . 3.1416*$radius*$radius;
        }
        else{
            echo "Wrong input";
        }
    }

    areaIdentifier('Circle', 0 , 0 , 2);


    // Grade And GPA Function
    function gpaIdentifier($marks){
        if($marks>=80 && $marks<=100){
            echo "<br><br>Your Grade: A+ and GPA: 5.00";
        }
        elseif ($marks>=70 && $marks<=79) {
            echo "<br><br>Your Grade: A and GPA: 4.50";
        }
        elseif ($marks>=60 && $marks<=69) {
            echo "<br><br>Your Grade: A- and GPA: 4.00";
        }
        elseif ($marks>=50 && $marks<=59) {
            echo "<br><br>Your Grade: B and GPA: 3.50";
        }
        elseif ($marks>=40 && $marks<=49) {
            echo "<br><br>Your Grade: C and GPA: 3.00";
        }
        elseif ($marks<40) {
            echo "<br><br>Your Grade: F and GPA: 2.00";
        }
        
        echo "<br>";
    }

    gpaIdentifier(45);

    // Birthdate - Age detection

    function ageDetection($year){
        $age = 2021 - $year;
        return $age;
    }

    echo "<br>Your age is: ".ageDetection(1992);

    //Dynamic Heading

    function dynamicHeading($head, $tag){
        echo "<$tag>$head</$tag>";
    }

    dynamicHeading('Web Developer','h1');

    //BMI Calculator

    function bmiCalc($mass, $height){
        $bmi = $mass / pow($height,2);
        return $bmi;
    }

    echo "BMI : ".bmiCalc(80, 1.7);

    //Taka to Dollar, Canadian Dollar, Pound

    function moneyExchange($taka){
        $dollar = $taka * 0.012;
        $canadian_dollar = $taka * 0.015;
        $pound = $taka*0.0086;
        
        echo "<br><br>Taka To Dollar: ".$dollar."<br>Taka to Canadian Dollar: " .$canadian_dollar. "<br>Taka to Pound: ".$pound;
    }

    moneyExchange(2);

    //Color changing function

    function colorChange($head, $color){
        if($color=='Red'){
            echo "<h1 style='color: red'>$head</h1>";
        }
        if($color=='Green'){
            echo "<h1 style='color: green'>$head</h1>";
        }
        if($color=='Yellow'){
            echo "<h1 style='color: yellow'>$head</h1>";
        }
        if($color=='Purple'){
            echo "<h1 style='color: purple'>$head</h1>";
        }
        if($color=='Black'){
            echo "<h1 style='color: black'>$head</h1>";
        }
    }

    colorChange('Web Developer','Green');

    // Uppercase to Lowercase & Lowercase to Uppercase

    function caseConvertion($str, $case){
        if ($case == 'uppercase'){
            echo "<br><h3 style='text-transform: uppercase'>$str</h3>";
        }
        if ($case == 'lowercase'){
            echo "<br><h3 style='text-transform: lowercase'>$str</h3>";
        }
    }

    caseConvertion('Web Developer','uppercase');

    // image managing

    function imageManager($imgName, $height, $width){
        echo "Image Name: ".$imgName."<br> Image Height: ".$height."<br>Image Width: ".$width;
    }

    imageManager('Faysal', 300, 300);


    
   


?>