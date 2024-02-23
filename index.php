<?php
class Movie 
{
    public $name;
    public $year;
    public $category;

    function __construct($name, $year, $category )
    {
        $this->name = $name;
        $this->year = $year;
        $this->category = $category;
    }
}
?>