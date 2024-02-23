<?php

require_once __DIR__ . '/models/Actor.php';
require_once __DIR__ . '/data/actors.php';
require_once __DIR__ . '/models/Movie.php';
require_once __DIR__ . '/data/movies.php';
require_once __DIR__ . '/models/Director.php';

echo $first_movie->sentence();
echo $second_movie->sentence();
echo $third_movie->sentence();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>
