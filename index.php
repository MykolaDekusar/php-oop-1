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
        // converting array to string
        $genreString = implode(', ', $this->genre);
        // getting correct info
        return "Title:$this->title <br>Genre:$genreString <br>Year:$this->year <hr>";
    }
}
try {
    // assigning movies to Movie
    $movie1 = new Movie('Avengers', ['Action', 'Suspence'], 2014);
    $movie2 = new Movie('Matrix', ['Action'], 1998);
    // printing data
    echo $movie1->getFilm();
    echo $movie2->getFilm();
    // catching error
} catch (Exception $e) {
    echo 'Error => ', $e->getMessage();
}
