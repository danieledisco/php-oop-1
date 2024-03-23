<?php
include __DIR__ . '/app/Layout/header.php';
require_once __DIR__ . '/app/Models/Cast.php';
require_once __DIR__ . '/app/Models/Movie.php';
require_once __DIR__ . '/app/Models/Genere.php';
require_once __DIR__ . '/app/Data/db.php';


/* Numbero of movies in db */
$nMovies = count($movieData);

/* Load data in array of object Movies */
for ($i = 0; $i < $nMovies; $i++) {

    /* First invoke the constructor of the class Cast */
    $cast = new Cast(
        $movieData[$i]['director'],
        $movieData[$i]['screePlayer'],
        $movieData[$i]['photograpyDirector'],
        $movieData[$i]['mainActor'],
    );


    $generi = new Genere(['prova', 'prova']);
    /* Generate the Movie obj in the objArray */
    $objArray[$i] = new Movie(
        $movieData[$i]['title'],
        $generi,
        $movieData[$i]['yearProduction'],
        $movieData[$i]['countryProduction'],
        $movieData[$i]['duration'],
        $movieData[$i]['sponsor'],
        $movieData[$i]['producer'],
        $cast
    );
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<?php include __DIR__ . '/app/Layout/main.php'; ?>
<?php include __DIR__ . '/app/Layout/footer.php'; ?>