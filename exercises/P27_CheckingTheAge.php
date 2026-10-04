<?php

class P27_CheckingTheAge
{
    public function main(): void
    {
        // Write your code here
        echo "How old are you? ";
        $input = (int) trim(fgets($GLOBALS['STDIN'] ?? STDIN));
        if ($input >= 0 && $input <= 120){
            echo "Ok";
        } else {
            echo "Impossible!";
        }
    }
}
