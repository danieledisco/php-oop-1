
<?php
/**
 * Class Movie
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
    public function __construct(
        public string $title,
        public string $movieGenre,
        public int $yearProduction,
        public string $countryProduction,
        public int $duration,
        public string $sponsor,
        public string $producer,
        public object $castMovie
    ) {
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
