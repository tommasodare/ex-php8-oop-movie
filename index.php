<?php

class Movie
{

    // Variabili d'istanza
    public $title;
    public $director;
    public $release_year;
    public $rating;
    public $duration;

    // Costruttore
    function __construct($title, $director, $release_year, $rating, $duration)
    {
        $this->title = $title;
        $this->director = $director;
        $this->release_year = $release_year;
        $this->rating = $rating;
        $this->duration = $duration;
    }

    // Metodo per ottenere il titolo del film
    public function getMovieTitle()
    {
        return $this->title;
    }
}

$lotr = new Movie("Il Signore degli Anelli - La Compagnia dell'Anello", "Peter Jackson", 2001, 9.0, 178);
$ironman = new Movie("Iron Man", "Jon Favreau", 2008, 7.9, 126);

var_dump($lotr);
var_dump($ironman);

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP Movie</title>
</head>

<body>

    <h1>Movie OOP</h1>

</body>

</html>