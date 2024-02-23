<?php

require_once __DIR__ . '/models/Actor.php';
require __DIR__ . '/data/actors.php';
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






$first_movie = new Movie('Inception', '2010', 'Fantascienza', new Director('Christopher', 'Nolan'), $inception_actors);
var_dump($first_movie);

$second_movie = new Movie('La La Land', '2016', 'Musical', new Director('Damien', 'Chazelle'), $la_la_land_actors);
var_dump($second_movie);

$third_movie = new Movie('Il Padrino', '1972', 'Drammatico', new Director('Francis', 'Ford Coppola'), $il_padrino_actors);
var_dump($third_movie);

echo $first_movie->sentence();
echo $second_movie->sentence();
echo $third_movie->sentence();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>
