<?php

class P21_LargerThanOrEqualTo
{
    public function main(): void
    {
        // Write your code here
        // Prompt the user for input
        echo "Give the first number:\n";
        // Get input from the user
        $num1 = trim(fgets($GLOBALS['STDIN'] ?? STDIN));
        // Prompt the user for input
        echo "Give the second number:\n";
        // Get input from the user
        $num2 = trim(fgets($GLOBALS['STDIN'] ?? STDIN));
        // Check year value
        if ((int) $num1 > (int) $num2 ){
            echo "Greater number is: " . $num1;
        } else if ((int) $num1 == (int) $num2) {
            echo "The numbers are equal!";
        } else {
            echo "Greater number is: " . $num2;
        }
    }
}
