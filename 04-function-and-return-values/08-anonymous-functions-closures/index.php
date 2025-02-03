<?php

// Anonymous function
$square = function ($number) {
  return $number * $number;
};

$result = $square(5);

echo "The square of 5 is: " . $result;

// Closures and outer scope access
function createCounter()
{
  $count = 0;
  $count1 = 0;

  // Define a closure that captures the $count variable
  $counter = function () use (&$count, &$count1) {
    return [++$count, ++$count1];
  };

  return $counter;
}

// Create a counter function
$counter = createCounter();

// Use the counter function to increment and display the count
echo print_r($counter()) . "\n"; // Output: 1
echo print_r($counter()) . "\n"; // Output: 2
echo print_r($counter()) . "\n"; // Output: 3