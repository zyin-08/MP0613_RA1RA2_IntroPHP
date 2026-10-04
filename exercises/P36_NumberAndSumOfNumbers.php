<?php

class P36_NumberAndSumOfNumbers
{
    public function main(): void
    {
        // Write your code here
        $sum = 0;
        $count = 0;
        while (true){
            echo "Give a number:\n";
            $input = (int) trim(fgets($GLOBALS['STDIN'] ?? STDIN));
            if ($input == 0){
                break;
            } else {
                $count++;
                $sum +=$input;
            }
        }
        echo "Number of numbers: " . $count . "\n";
        echo "Sum of the numbers: " . $sum . "\n";
    }
}
