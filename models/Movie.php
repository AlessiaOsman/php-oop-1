<?php
require_once  __DIR__ . '/Director.php';
class Movie
{
    public $title;
    public $year;
    public $category;
    public $director;
    public $actors;

    public function __construct($name, $year, $category, Director $director, Array $actors)
    {
        $this->title = $name;
        $this->year = $year;
        $this->category = $category;
        $this->director = $director;
        $this->actors = $actors;
    }

    public function sentence()
    {
        return $this->title . ' è del ' . $this->year . ' ed è sotto la categoria ' . $this->category . ' (diretto da ' .$this->director->fullName() .')';
    }
};