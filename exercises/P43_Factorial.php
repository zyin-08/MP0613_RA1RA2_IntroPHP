<?php

class P43_Factorial
{
    public function main(): void
    {
        // Write your program here
        echo "Give a number: ";
        (int) $input = trim(fgets($GLOBALS['STDIN'] ?? STDIN));
        $count = 1;
        for ($i = 1; $i <=$input; $i++){
            $count *= $i;
        }
        echo "Factorial: " . $count;
    }
}
