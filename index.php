<?php
include_once __DIR__ . '/Models/Movie.php';
include_once __DIR__ . '/db.php';

try {
    // creating new empty array
    $movies = [];
    // cycling in data
    foreach ($data as $movieData) {
        // creating new movie objects and assigning data to movies array
        $movies[] = new Movie($movieData['title'], $movieData['genre'], $movieData['year']);
        // var_dump($movieData);
    }
    // printing each movie from newly created movies array
    foreach ($movies as $movie) {
        echo $movie->getFilm();
        echo '<br>';
    }
    // catching error
} catch (Exception $e) {
    echo 'Error => ', $e->getMessage();
}
