<?php

require_once __DIR__ . "/movie.php";


$myFilm = new Movie('star wars', '5');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1> <?php echo $myFilm->infoFilm(); ?></h1>
</body>

</html>