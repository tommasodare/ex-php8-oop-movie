<?php

class Movie
{

    // Variabili d'istanza
    public $title;
    public $director;
    public $release_year;
    public $rating;
    public $duration;
    public $genre;

    // Costruttore
    function __construct($_title, $_director, $_release_year, $_rating, $_duration, Genre $_genre)
    {
        $this->title = $_title;
        $this->director = $_director;
        $this->release_year = $_release_year;
        $this->rating = $_rating;
        $this->duration = $_duration;
        $this->genre = $_genre;
    }

    // Metodo per ottenere il titolo del film
    public function getMovieTitle()
    {
        return $this->title;
    }
}
