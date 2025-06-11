<?php

class Movie
{

    use HasOscar;

    // Variabili d'istanza
    public $title;
    public $director;
    public $release_year;
    public $rating;
    public $duration;
    public Genre $genre;

    // Costruttore
    function __construct($_title, $_director, $_release_year, $_rating, $_duration, Genre $_genre, $_hasOscar = false)
    {
        $this->title = $_title;
        $this->director = $_director;
        $this->release_year = $_release_year;
        $this->rating = $_rating;
        $this->duration = $_duration;
        $this->genre = $_genre;
        $this->hasOscar = $_hasOscar;
    }

    // Metodo per ottenere il titolo del film
    public function getMovieTitle()
    {
        return $this->title;
    }
}
