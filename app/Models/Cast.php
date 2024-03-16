<?php

/**
 * Class Cast
 * Groups main figures of a cast of a movie
 * @param String $director is the director of the movie
 * @param String $screePlayer is who write the movie
 * @param String $photograpyDirector is who is responsible for the panorama aspect of the shots
 * @param String $mainActor is main protagonist of the film 
 */
class Cast
{
    public function __construct(
        public string $director,
        public string $screePlayer,
        public string $photograpyDirector,
        public string $mainActor
    ) {
        $this->director = $director;
        $this->screePlayer = $screePlayer;
        $this->photograpyDirector = $photograpyDirector;
        $this->mainActor = $mainActor;
    }
}
