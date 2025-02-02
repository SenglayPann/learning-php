<?php

$names = array('John', 'Jack', 'Jill');
$numbers = [1, 2, 3, 4, 5, 6];

function inspect($value)
{
  echo '<pre>';
  var_dump($value);
  echo '</pre>';
}

// inspect($names);
// inspect($numbers);

// print_r($names);

// echo $names[2];
// echo $numbers[3];

// Add element to array
$numbers[] = 100;
$numbers[] = 101;

$numbers[3] = 200;

unset($numbers[3]); // remove an element but won't rearrange

$numbers = array_values($numbers); // rearrange the array

inspect($numbers);
