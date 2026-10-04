<?php

class P29_GiftTax
{
    public function main(): void
    {
        // Write your code here
        echo "Value of the gift?\n";
        $input = (int) trim(fgets($GLOBALS['STDIN'] ?? STDIN));
        if ($input >= 5000 && $input < 25000) {
            $result = (100 + ($input - 5000) * 0.08);
            echo "Tax: " . $result;
        } else if ($input >= 25000 && $input < 55000){
            $result = (1700 + ($input - 25000) * 0.1);
            echo "Tax: " . $result;
        } else if ($input >= 55000 && $input < 200000){
            $result = (4700 + ($input - 55000) * 0.12);
            echo "Tax: " . $result;
        } else if($input >= 200000 && $input < 1000000){
            $result = (22100 + ($input - 200000) * 0.15);
            echo "Tax: " . $result;
        } else if ($input >= 1000000){
            $result = (142100 + ($input - 1000000) * 0.17);
            echo "Tax: " . $result;
        } else {
            echo "No tax!";
        }
    }
}
