<?php

use function PHPUnit\Framework\equalTo;

class P26_Same
{
    public function main(): void
    {
        // Write your code here
        echo "Enter the first string:";
        $str1 = trim(fgets($GLOBALS['STDIN'] ?? STDIN));
        echo "Enter the second string:";
        $str2 = trim(fgets($GLOBALS['STDIN'] ?? STDIN));
        if ($str1 === $str2){
            echo "Same";
        } else {
            echo "Different";
        }
    }
}
