<?php

class P22_GradesAndPoints
{
    public function main(): void
    {
        // Write your code here
        echo "Give points[0-100]:";
        (int) $input = trim(fgets($GLOBALS['STDIN'] ?? STDIN)); 
        if ($input < 0){
            echo "Grade: impossible!";
        } else if($input >= 0 && $input <= 49){
            echo "Grade: failed";
        } else if($input >= 50 && $input <= 59){
            echo "Grade: 1";
        } else if($input >= 60 && $input <= 69){
            echo "Grade: 2";
        } else if($input >= 70 && $input <= 79){
            echo "Grade: 3";
        } else if($input >= 80 && $input <= 89){
            echo "Grade: 4";
        } else if($input >= 90 && $input <= 100){
            echo "Grade: 5";
        } else {
            echo "Grade: incredible!";
        }
    }
}
