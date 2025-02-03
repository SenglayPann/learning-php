<?php
/*
Fizzbuzz Challenge:
Write a program that prints the numbers from 1 to 100. But for multiples of three print “Fizz” instead of the number and for the multiples of five print “Buzz”. For numbers which are multiples of both three and five print “FizzBuzz”. Remember, you can use the modulus operator to check if a number is divisible by another number.
*/

for ($i = 1; $i <= 100; $i++) {
    $three_divisible = $i % 3 == 0;
    $five_divisible = $i % 5 == 0;
    if ($three_divisible && $five_divisible) {
        echo "FizzBuzz\n";
    } elseif ($three_divisible) {
        echo "Fizz\n";
    } elseif ($five_divisible) {
        echo "Buzz\n";
    } else {
        echo $i . "\n";
    }
    echo "<br>";
};

?>