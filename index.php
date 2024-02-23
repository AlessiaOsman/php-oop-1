<?php
class Movie
{
    public $name;
    public $year;
    public $category;
    public $director;

    public function __construct($name, $year, $category, Director $director)
    {
        $this->name = $name;
        $this->year = $year;
        $this->category = $category;
        $this->director = $director;
    }

    public function sentence()
    {
        return $this->name . ' è del ' . $this->year . ' ed è sotto la categoria ' . $this->category . ' (diretto da ' .$this->director->fullName() .')';
    }
};

class Director
{
    public $first_name;
    public $last_name;

    public function __construct($first_name, $last_name)
    {
        $this->first_name = $first_name;
        $this->last_name = $last_name;
    }

    public function fullName()
    {
        return $this->first_name . ' ' . $this->last_name;
    }
};


$first_movie = new Movie('Inception', '2010', 'Fantascienza', new Director('Christopher', 'Nolan'));
var_dump($first_movie);

$second_movie = new Movie('La La Land', '2016', 'Musical', new Director('Damien', 'Chazelle'));
var_dump($second_movie);

$third_movie = new Movie('Il Padrino', '1972', 'Drammatico', new Director('Francis', 'Ford Coppola'));
var_dump($third_movie);

echo $first_movie->sentence();
echo $second_movie->sentence();
echo $third_movie->sentence();
