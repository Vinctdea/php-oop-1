<?php

class Movie
{

    // elementi
    public $name;
    public $category;
    public $vote;

    // costruttore

    public function __construct($_name, $_vote)
    {
        $this->name = $_name;
        $this->vote = $_vote;
    }

    public function infoFilm()
    {
        return 'il film ' . $this->name . ' ha ' . $this->vote . '/5';
    }
}
