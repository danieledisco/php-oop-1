<?php
include __DIR__ . '/app/Layout/header.php';
require_once __DIR__ . '/app/Models/Cast.php';
require_once __DIR__ . '/app/Models/Movie.php';
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

    /* Generate the Movie obj in the objArray */
    $objArray[$i] = new Movie(
        $movieData[$i]['title'],
        $movieData[$i]['movieGenre'],
        $movieData[$i]['yearProduction'],
        $movieData[$i]['countryProduction'],
        $movieData[$i]['duration'],
        $movieData[$i]['sponsor'],
        $movieData[$i]['producer'],
        $cast
    );
}

var_dump($objArray[3]);

$yearOfTitanic = $objArray[3]->getYearProduction();
echo "The year of production of Titanic is" . $yearOfTitanic;

/* $castTitanic = new Cast('James Cameron', 'James Cameron', 'Russell Carpenter', 'Leonardo Di Caprio');
$filmTitanic = new Movie('Titanic', 'Adventure-Dramatic', 1977, 'USA', 194, 'Paramaut Pictures', 'Rea Sanchini', $castTitanic);

$castLaVitaEBella = new Cast('Roberto Benigni', 'Vincenzo Cerami', 'Tonino Delli Colli', 'Roberto Benigni');
$filmLaVitaEBella = new Movie('La vita è bella', 'Comic-Dramatic', 1977, 'Italia', 122, 'Melampo', 'ELda Ferri', $castLaVitaEBella);

var_dump($castTitanic);
var_dump($filmTitanic);

var_dump($castLaVitaEBella);
var_dump($filmLaVitaEBella);


$titanic_director = $filmTitanic->getDirector();
echo "The director of Titanic is " . $titanic_director;
echo '<br>';
echo '<br>';

$LaVitaEBella_mainActor = $filmLaVitaEBella->getMainActor();
echo "The main actor of La vita è bella is " . $LaVitaEBella_mainActor;
echo '<br>';
echo '<br>';

$yearOfTitanic = $filmTitanic->getYearProduction();
echo "The year of production of Titanic is" . $yearOfTitanic; */
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
    <main>
        <div class="container">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus aspernatur vero quasi sed, quo aliquam corporis iusto tempore impedit ex dolorem libero recusandae consectetur nisi sint quam optio commodi. Non fugit id quia eaque animi cupiditate fugiat esse odit minima! Dolores modi nobis vitae aut expedita tempora quam odio aperiam nesciunt maxime recusandae eveniet dignissimos ipsa ducimus veritatis pariatur harum quos aspernatur, laudantium similique eaque, quod, repellendus omnis sequi. Quo accusantium, praesentium quae doloribus tempore eaque perferendis sunt modi dolor officiis molestias culpa commodi nemo atque beatae quisquam odio tenetur cupiditate amet saepe facilis magni. Ab asperiores dolorem aut beatae.
        </div>

    </main>

    <?php include __DIR__ . '/app/Layout/footer.php'; ?>