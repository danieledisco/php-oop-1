<?php

require_once __DIR__ . '/app/Models/Cast.php';
require_once __DIR__ . '/app/Models/Movie.php';

$castTitanic = new Cast('James Cameron', 'James Cameron', 'Russell Carpenter', 'Leonardo Di Caprio');
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
echo "The year of production of Titanic is" . $yearOfTitanic;
