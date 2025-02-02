<?php
  $num1 = 10;
  $num2 = 20;
  $num3 = '30';
  $bool = true;
  $bool1 = false;

  // implicit type conversion
  $result =  $num1 + $num2; 
  var_dump($result);
  $result1 = $num1 + $num3; // string 30 is converted to integer 30
  var_dump($result1);
  $result2 = $num3 + $num3; // string 30 is converted to integer 30
  var_dump($result2);
  $result3 = $num1 . $num2; // 10 is converted to string 10
  var_dump($result3);
  $result4 = $num1 . $num3; // 10 is converted to string 10
  var_dump($result4);
  $result5 = $num1 + $bool; // true is converted to integer 1
  var_dump($result5);
  $result6 = $num3 . $bool; // true is converted to string 1
  var_dump($result6);
  $result7 = $bool . $bool1; // both true and false are converted to string 1 and 0 respectively
  var_dump($result7);
  echo "<br>";

  // Expplicit type conversion
  $result8 = (int) $num3; // string 30 is converted to integer 30
  var_dump($result8);
  $result9 = (string) $num1; // integer 10 is converted to string 10
  var_dump($result9);
  $result10 = (bool) $num1; // integer 10 is converted to boolean true
  var_dump($result10);

?>