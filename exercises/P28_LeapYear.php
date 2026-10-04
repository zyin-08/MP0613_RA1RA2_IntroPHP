<?php

class P28_LeapYear
{
    public function main(): void
    {
        // Write your code here
        echo "Give a year: ";
        $input = (int) trim(fgets($GLOBALS['STDIN'] ?? STDIN));
        if ($input % 4 == 0 && ($input % 100 != 0 || $input % 400 == 0)){
            echo "The year is a leap year.";
        } else {
            echo "The year is not a leap year.";
        }
    }
}
