<?php
class Movie 
{
    public $name;
    public $year;
    public $category;

    public function __construct($name, $year, $category )
    {
        $this->name = $name;
        $this->year = $year;
        $this->category = $category;
    }

    public function sentence()
    {
        echo $this->name . ' è del ' . $this->year . ' ed è sotto la categoria ' . $this->category;
    }
};

$first_movie = new Movie('Inception', '2010', 'Fantascienza' );
var_dump($first_movie);

$second_movie = new Movie('La La Land', '2016', 'Musical' );
var_dump($second_movie);

$third_movie = new Movie('Il Padrino', '1972', 'Drammatico' );
var_dump($third_movie);

$first_movie->sentence();
$second_movie->sentence();
$third_movie->sentence();


?>