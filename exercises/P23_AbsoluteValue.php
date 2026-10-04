<?php

class P23_AbsoluteValue
{
    public function main(): void
    {
        // Write your code here
        $input = (int) trim(fgets($GLOBALS['STDIN'] ?? STDIN));
        
        if ($input < 0){
            echo ($input * -1) . "\n";
        } else {
            echo $input . "\n";
        }
    }
}
