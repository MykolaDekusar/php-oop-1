<?php
include_once __DIR__ . '/Models/Movie.php';
include_once __DIR__ . '/db.php';

try {
    // creating new empty array
    $movies = [];
    // cycling in data
    foreach ($data as $movieData) {
        // creating new movie objects and assigning data to movies array
        $movies[] = new Movie($movieData['title'], $movieData['genre'], $movieData['year'], $movieData['actors'] ?? ['Undefined']);
        var_dump($movies);
    }
    // catching error
} catch (Exception $e) {
    echo 'Error => ', $e->getMessage();
}
$movies[0]->setGenre('Commedy'); ?>

?>
<!-- HTML -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Films</title>
    <link rel="stylesheet" href="./styles/style.css">
</head>

<body>
    <div class="container">
        <?php ?>
        <h1>Films</h1>
        <ul>
            <!-- printing each movie from newly created movies array -->
            <?php foreach ($movies as $movie) : ?>
                <li><?php echo $movie->getFilm(); ?></li>
            <?php endforeach ?>
        </ul>
    </div>
</body>

</html>