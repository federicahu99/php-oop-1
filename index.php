<?php 

// è definita una classe ‘Movie’
class Movie 
{
    // all'interno della classe sono dichiarate delle variabili d'istanza
    public $original_title;
    public $title;
    public $year;
    public $language;
    public $genre;
    
    // all'interno della classe è definito un costruttore
    public function __construct($_original_title, $_title, $_year, $_language, $_genre)
    {
        $this->original_title = $_original_title;
        $this->title = $_title;
        $this->year = $_year;
        $this->language = $_language;
        $this->genre = $_genre;
    }
    
    // all'interno della classe è definito almeno un metodo
   
    public function setYear ($year){
        if(!is_numeric($year) || $year <= 0) return;
        $this->year = $year;
    }

    public function getTitles() {
        return $this->original_title . "-" . $this->title;
    }
}   

// istanze
$movie1 = new Movie('The Good Father', 'Il Padrino', '1990', 'en', 'Drammatic');
$movie2 = new Movie('Goodfellas', 'Quei Bravi Ragazzi', '2022', 'en', 'Suspance');

echo '<pre>';
var_dump($movie1);
var_dump($movie2);
echo '</pre>';
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Movie</title>
    </head>
    <body>
<!-- vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà <ul> -->
    <ul>
        <li><h1><?php $movie1->getTitles() ?></h1></li>
        <li><p><?php $movie1->year ?></p></li>
        <li><p><?php $movie1->language ?></p></li>
        <li><p><?php $movie1->genre ?></p></li>
    </ul>
</body>
</html>


