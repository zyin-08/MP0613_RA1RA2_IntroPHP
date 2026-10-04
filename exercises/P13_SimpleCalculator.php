<?php

class P13_SimpleCalculator {
    public function main(): void {
        // Define two numbers
        $numA = 8;
        $numB = 2;

        // Perform and output the calculations
        // Write the program here
       $sum = $numA + $numB;
       $difference = $numA - $numB;
       $product = $numA * $numB;
       $division = $numA / $numB;
       $quotient = number_format($division, 1);
       echo "8 + 2 = " . $sum . "\n";
       echo "8 - 2 = " . $difference . "\n";
       echo "8 * 2 = " . $product . "\n";
       echo "8 / 2 = " . $quotient . "\n";
       }
}
