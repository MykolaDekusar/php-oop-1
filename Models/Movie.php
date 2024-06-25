<?php
// creating a class
class Movie
{
    // setting private info of class
    private static int $id = 0;
    private int $filmId;
    private string $title;
    private array $genre;
    private int $year;
    private array $actors;
    // constructor function 
    public function __construct(string $title, array $genre, int $year, array $actors)
    {
        // handle of empty info
        if (empty($title) || empty($genre)) {
            throw new Exception("Ooops maybe you forgot to insert a title or a genre?");
        } else {
            // assigning values
            $this->filmId = self::$id++;
            $this->title = $title;
            $this->genre = $genre;
            $this->year = $year;
            $this->actors = $actors;
        }
    }
    //function to get movie title
    public function getTitle(): string
    {
        return $this->title;
    }
    //function to set movietitle
    public function setTitle($title): void
    {
        $this->title = $title;
    }
    // GET SET MOVIE GENRES
    public function setGenre($genre): void
    {
        $this->genre[] = $genre;
    }
    public function getGenre(): string
    {
        $genreString = implode(', ', $this->genre);
        return $genreString;
    }

    // function to get movie info
    public function getFilm(): string
    {
        // converting array to string
        $genreString = implode(', ', $this->genre);
        $actorString = implode(', ', $this->actors);
        // getting correct info
        return "ID: $this->filmId <h2>Title: $this->title</h2> <br>Genre: $genreString <br>Year: $this->year <br>Actors: $actorString";
    }
}
