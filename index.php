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
    <style>
        body {
            font-family: Arial, sans-serif;
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th,
        td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #f4f4f4;
            font-weight: bold;
        }

        tr:hover {
            background-color: #f5f5f5;
        }
    </style>
</head>

<body>

    <h1>Movie OOP</h1>

    <table>
        <thead>
            <tr>
                <th>Title</th>
                <th>Director</th>
                <th>Release Year</th>
                <th>Rating</th>
                <th>Duration (min)</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // Display movie data in table rows
            $movies = [$lotr, $ironman];
            foreach ($movies as $movie) {
                echo "<tr>";
                echo "<td>{$movie->title}</td>";
                echo "<td>{$movie->director}</td>";
                echo "<td>{$movie->release_year}</td>";
                echo "<td>{$movie->rating}/10</td>";
                echo "<td>{$movie->duration}</td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>

</body>

</html>