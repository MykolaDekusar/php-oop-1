<?php
// creating a class
class Movie
{
    // setting private info of class
    private string $title;
    private array $genre;
    private int $year;
    // constructor function 
    public function __construct(string $title, array $genre, int $year)
    {
        // handle of empty info
        if (empty($title) || empty($genre)) {
            throw new Exception("Ooops maybe you forgot to insert a title or a genre?");
        } else {
            // assigning values
            $this->title = $title;
            $this->genre = $genre;
            $this->year = $year;
        }
    }
    // function to get movie info
    public function getFilm(): string
    {
        $genreString = implode(', ', $this->genre);
        return "Title:$this->title <br>Genre:$genreString <br>Year:$this->year <hr>";
    }
}

try {
    $movie1 = new Movie('Avengers', ['Action', 'Suspence'], 2014);
    $movie2 = new Movie('Matrix', ['Action'], 1998);
    echo $movie1->getFilm();
    echo $movie2->getFilm();
} catch (Exception $e) {
    echo 'Error => ', $e->getMessage();
}
