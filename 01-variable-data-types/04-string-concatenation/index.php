<?php
  $first_name = 'Senglay';
  $last_name = 'Pann';

  $full_name = "$first_name $last_name";	// faster than concatenation
  // or
  // $full_name = $first_name . ' ' . $last_name;
  // or 
  // $full_name = "{$first_name} {$last_name}";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>PHP From Scratch</title>
</head>

<body class="bg-gray-100">
    <header class="bg-blue-500 text-white p-4">
        <div class="container mx-auto">
            <h1 class="text-3xl font-semibold">PHP From Scratch</h1>
        </div>
    </header>
    <div class="container mx-auto p-4 mt-4">
        <div class="bg-white rounded-lg shadow-md p-6 mt-6">
            <!-- Output -->
            <p class="text-xl"><?= 'Hello, my name is ' . $full_name;
                                ?></p>
            <p class="text-xl"><?= "Hello, my name is $full_name";
                                ?></p>
            <!-- Double Quotes -->
            <p class="text-xl"><?= "Hello, my name is {$full_name}" ?></p>
            <p class="text-xl"><?= 'Hello, my name is \'Senglay Pann\'' ?></p>
        </div>
    </div>
</body>

</html>