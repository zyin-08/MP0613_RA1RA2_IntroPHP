<?php

class P32_OnlyPositives
{
    public function main(): void
    {
        // Write your code here
        while (true){
            echo "Give a number:\n";
            $input = (int) trim(fgets($GLOBALS['STDIN'] ?? STDIN));
            if($input < 0){
                echo "Unsuitable number";
            } else if ($input == 0){
                break;
            } else {
                $result = $input ** 2;
                echo $result;
            }
        }
    }
}
