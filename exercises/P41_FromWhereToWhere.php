<?php

class P41_FromWhereToWhere
{
    public function main(): void
    {
        // Write your program here
        echo "Where to? ";
        $end = (int) trim(fgets($GLOBALS['STDIN'] ?? STDIN));
        echo "\n";
        echo "Where from? ";
        $start = (int) trim(fgets($GLOBALS['STDIN'] ?? STDIN));
        for ($i = $start; $i <= $end; $i++){
            echo $i . "\n";
        }
    }
}
