<?php

require_once 'Traits/HasOscar.php';

require_once 'Models/Movie.php';
require_once 'Models/Genre.php';

$lotr = new Movie("Il Signore degli Anelli - La Compagnia dell'Anello", "Peter Jackson", 2001, 9.0, 178, new Genre(["Fantasy", "Adventure"]), true);
$ironman = new Movie("Iron Man", "Jon Favreau", 2008, 7.9, 126, new Genre(["Comics", "Action"]));
$starwars = new Movie("Star Wars: Episode I - The Phantom Menace", "George Lucas", 1999, 8.5, 136, new Genre(["Fantasy", "Adventure", "Sci-Fi"]));

var_dump($lotr);
/* var_dump($ironman);
var_dump($starwars); */

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
                <th>Genre</th>
                <th>Oscar Winner</th>

            </tr>
        </thead>
        <tbody>
            <?php
            // Display movie data in table rows
            $movies = [$lotr, $ironman, $starwars];
            foreach ($movies as $movie) {
                echo "<tr>";
                echo "<td>{$movie->title}</td>";
                echo "<td>{$movie->director}</td>";
                echo "<td>{$movie->release_year}</td>";
                echo "<td>{$movie->rating}/10</td>";
                echo "<td>{$movie->duration}</td>";
                echo "<td>" . implode(", ", $movie->genre->name) . "</td>";
                echo "<td>" . ($movie->hasOscar() ? "Yes" : "No") . "</td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>

</body>

</html>