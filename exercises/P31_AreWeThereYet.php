<?php

class P31_AreWeThereYet
{
    public function main(): void
    {
        // Write your code here
        while (true){
            echo "Give a number:\n";
            (int) $input = trim(fgets($GLOBALS['STDIN'] ?? STDIN));
            if ($input == 4){
                break;
            }
        }

    }
}
