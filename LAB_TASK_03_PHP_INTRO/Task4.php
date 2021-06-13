<?php

    $number1=2;
    $number2=6;
    $number3=9;

    echo"Given Numbers: $number1,$number2,$number3 \n";

    if($number1>$number2)
    {
        if($number1>$number3)
        {
            echo" <br/> Largest Number: $number1";
        }
        else
        {
            echo"<br/> Largest Number: $number3";
        }
    }
    else
    {
        if($number2>$number3)
        {
            echo"<br/> Largest Number: $number2";
        }
        else
        {
            echo"<br/> Largest Number: $number3";
        }
    }
 
?>