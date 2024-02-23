<?php
require_once __DIR__ . '/../models/Movie.php';
require_once __DIR__ . '/../models/Director.php';

$first_movie = new Movie('Inception', '2010', 'Fantascienza', new Director('Christopher', 'Nolan'), $inception_actors);
var_dump($first_movie);

$second_movie = new Movie('La La Land', '2016', 'Musical', new Director('Damien', 'Chazelle'), $la_la_land_actors);
var_dump($second_movie);

$third_movie = new Movie('Il Padrino', '1972', 'Drammatico', new Director('Francis', 'Ford Coppola'), $il_padrino_actors);
var_dump($third_movie);