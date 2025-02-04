<?php

class MathUtility
{
  public static $pi = 3.14159;
  public  $e = 2.71828;

  public static function add(...$nums)
  {
    return array_sum($nums);
  }

  public static function addByPi(...$nums)
  {
    return self::add(self::$pi, ...$nums);
  }

  // public static function addByE(...$nums) // This will not work because $e is not a static property	
  // {
  //   return self::add(self::$e, ...$nums);
  // }
}

echo MathUtility::$pi . '<br>';
echo MathUtility::add(1, 2, 3, 4, 5) . '<br>';
echo MathUtility::addByPi(1, 2, 3, 4, 5) . '<br>';
// echo MathUtility::addByE(1, 2, 3, 4, 5) . '<br>'; // This will not work because $e is not a static property
