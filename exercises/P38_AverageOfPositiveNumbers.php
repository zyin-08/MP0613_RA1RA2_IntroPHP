<?php

class P38_AverageOfPositiveNumbers
{
    public function main(): void
    {
        // Write your program here
        $count = 0;
        $sum = 0;
        while (true) {
            (int) $input = trim(fgets($GLOBALS['STDIN'] ?? STDIN));
            if ($input > 0) {
                $sum += $input;
                $count++;
            }
            if ($input == 0){
                break;
            }
        }
        if ($count == 0){
            echo "Cannot calculate the average";
        } else {
            $average = $sum / $count;
            echo $average;
        }
    }
}
