<?php

/**
 * Class Genere
 * Groups main figures of a cast of a movie
 * @param array $generi
 */
class Genere
{
    public function __construct(
        public array $generi
    ) {
        $this->generi = $generi;
    }


    public function getText()
    {
        return join(", ", ($this->generi));
    }
}
