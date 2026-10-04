<?php

class P37_AverageOfNumbers
{
    public function main(): void
    {
        // Write your code here
        $sum = 0;
        $count = 0;
        while (true) {
            echo "Give a number:\n";
            $input = (int) trim(fgets($GLOBALS['STDIN'] ?? STDIN));
            if ($input == 0) {
                break;
            } else {
                $count++;
                $sum += $input;
            }
        }
        if ($count == 0) {
            echo "Average of the numbers: 0"; 
        } else {
            $average = $sum / $count;
            echo "Average of the numbers: " . $average;
        }
    }
}
