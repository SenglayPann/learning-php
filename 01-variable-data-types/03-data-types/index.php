<?php
 // string data type
  $first_name = "Senglay";
  $last_name = "Pann";
  $full_name = "$first_name $last_name";
  echo $full_name;
  echo '<br>';

  // integer data type
  $age = 20;
  echo $age;
  echo '<br>';

  // float data type
  $height = 1.80;
  echo $height;
  echo '<br>';

  // boolean data type
  $is_married = true;
  echo $is_married;
  echo '<br>';

  // array data type
  $hobbies = ['reading', 'coding', 'traveling'];
  // or 
  // $hobbies = array('reading', 'coding', 'traveling');
  var_dump($hobbies);
  echo '<br>';

  // object data type
  $person = new stdClass();
  $person->first_name = 'Senglay';
  $person->last_name = 'Pann';
  // var_dump($person);
  echo json_encode($person);

  // resource data type
  // $file =  fopen('index.php', 'r');
  // var_dump($file);
?>