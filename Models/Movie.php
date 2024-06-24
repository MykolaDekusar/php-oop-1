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
        return "<h2>Title: $this->title</h2> <br>Genre: $genreString <br>Year: $this->year";
    }
}
