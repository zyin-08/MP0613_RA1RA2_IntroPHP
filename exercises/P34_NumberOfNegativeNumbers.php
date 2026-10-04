<?php

class P34_NumberOfNegativeNumbers
{
    public function main(): void
    {
        // Write your code here
        $count =0;
        while(true){
            echo "Give a number:\n";
            (int) $input = trim(fgets($GLOBALS['STDIN'] ?? STDIN));
            if ($input == 0){
                break;
            } 
            if ($input < 0){
                $count++;
            }
        }
        echo "Number of negative numbers: " . $count;
    }
}
