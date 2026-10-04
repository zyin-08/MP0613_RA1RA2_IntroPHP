<?php

use function PHPUnit\Framework\equalTo;

class P25_Password
{
    public function main(): void
    {
        // Write your code here
        echo "Password?";
        $input = trim(fgets($GLOBALS['STDIN'] ?? STDIN));
        if ($input == "Caput Draconis") {
            echo "Welcome!";
        } else {
            echo "Off with you!";
        }
    }
}
