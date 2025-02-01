<?php
  // this is a single line comment

  $name = "Senglay Pann";

  $title = "Learn PHP From Scratch";	

  /* // this is a multi-line comment
  echo 'hello world';
  echo '<br>';
  print '<br>';
  print 'hello world';
  */
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title><?php echo $title; ?></title>
</head>

<body class="bg-gray-100">
    <header class="bg-blue-500 text-white p-4">
        <div class="container mx-auto">
            <h1 class="text-3xl font-semibold inline"><?= 'Learn PHP From Scratch' ?></h1><span class="text-sm ml-2"><?= 'by ', $name ?></span>
        </div>
    </header>
    <div class="container mx-auto p-4 mt-4">
        <div class="bg-white rounded-lg shadow-md p-6">
            <h2 class="text-2xl font-semibold mb-4"><?= 'Welcome to the course' ?></h2>
            <?php print '<p>In this course, you will learn the fundamentals of the PHP language</p>'; ?>
        </div>
    </div>
</body>

</html>