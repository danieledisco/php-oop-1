<?php

/**
 * ### Class Cast
 * Groups main figures of a cast of a movie
 * @param String $director is the director of the movie
 * @param String $screePlayer is who write the movie
 * @param String $photograpyDirector is who is responsible for the panorama aspect of the shots
 * @param String $mainActor is main protagonist of the film 
 */
class Cast
{
    public $director;
    public $screePlayer;
    public $photograpyDirector;
    public $mainActor;

    /**
     * Constructor of the Class Cast
     * @param String $director is the director of the movie
     * @param String $screePlayer is who write the movie
     * @param String $photograpyDirector is who is responsible for the panorama aspect of the shots
     * @param String $mainActor is main protagonist of the film  
     */
    public function __construct($director, $screePlayer, $photograpyDirector, $mainActor)
    {
        $this->director = $director;
        $this->screePlayer = $screePlayer;
        $this->photograpyDirector = $photograpyDirector;
        $this->mainActor = $mainActor;
    }
}
/**
 * #### Class Movie
 * Describe main info of a Movie
 * @param String $title is the title of the movie
 * @param String $movieGenre is the charactreristic if the Movie (dramatic, comic, western etc)
 * @param Number $yearProduction is the year in wich the Movie was produced
 * @param String $countryProduction is the country where the movie was produced
 * @param Number $duration is how long is the movi in minutes
 * @param String $sponsor is the main sponsor of the movie
 * @param String $producer is who produces the movie
 * @param Object $castMovie groups main figures of the cast of the movie
 */
class Movie
{
    public $title;
    public $movieGenre;
    public $yearProduction;
    public $countryProduction;
    public $duration;
    public $sponsor;
    public $producer;
    public $castMovie;

    /**
     * Constructor of the Class Movie
     * @param String $title is the title of the movie
     * @param String $movieGenre is the charactreristic if the Movie (dramatic, comic, western etc)
     * @param Number $yearProduction is the year in wich the Movie was produced
     * @param String $countryProduction is the country where the movie was produced
     * @param Number $duration is how long is the movi in minutes
     * @param String $sponsor is the main sponsor of the movie
     * @param String $producer is who produces the movie
     * @param Object $castMovie groups main figures of the cast of the movie 
     */
    public function __construct($title, $movieGenre, $yearProduction, $countryProduction, $duration, $sponsor, $producer, $castMovie)
    {
        $this->title = $title;
        $this->movieGenre = $movieGenre;
        $this->yearProduction = $yearProduction;
        $this->countryProduction = $countryProduction;
        $this->duration = $duration;
        $this->sponsor = $sponsor;
        $this->producer = $producer;
        $this->castMovie = $castMovie;
    }

    /**
     * function Get Director
     * This function returns the director of the movie
     * @return String Director
     */
    public function getDirector()
    {
        return $this->castMovie->director;
    }

    /**
     * function Get Main Actor
     * This function returns the main actor of the movie
     * @return String Main Actor
     */
    public function getMainActor()
    {
        return $this->castMovie->mainActor;
    }
    /**
     * function Get Year production
     * This function returns the year of production of the movie 
     * @return Number yearProduction
     */
    public function getYearProduction()
    {
        return $this->yearProduction;
    }
}

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
