<?php

class P45_IndexWasNotFound
{
    public function main(): void
    {
        
        $array = [6, 2, 8, 1, 3, 0, 9, 7];

        // Write your code here
        echo "Search for? ";
        $input = (int) trim(fgets($GLOBALS['STDIN'] ?? STDIN));
        $index = 0;
        for ($i = 0; $i < count($array); $i++){
            if ($array[$i] == $input){
                $index = $i;
                break;
            }
        }
        if ($index == 0){
            echo $input . " was not found.";
        } else {
            echo $input . " is at index " . $index . ".";
        }
    }
}
