<?php

class P44_Swap
{
    public function main(): void
    {
        $array = [1, 3, 5, 7, 9];

        foreach ($array as $value) {
            echo $value . "\n";
        }

        echo "\n";

        // Write your code here
        echo "Give two indices to swap:\n";
        (int) $num1 = trim(fgets($GLOBALS['STDIN'] ?? STDIN));
        (int) $num2 = trim(fgets($GLOBALS['STDIN'] ?? STDIN));
        $temp = $array[$num1];
        $array[$num1] = $array[$num2];
        $array[$num2] = $temp;
        echo "\n\n";
        foreach ($array as $value) {
            echo $value . "\n";
        }
    }
}
