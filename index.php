<?php 

// è definita una classe ‘Movie’
// all'interno della classe sono dichiarate delle variabili d'istanza
// all'interno della classe è definito un costruttore
// all'interno della classe è definito almeno un metodo
// vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà

class Movie 
{
    public $original_title;
    public $title;
    public $year;
    public $language;
    public $genre;

    public function __construct($original_title, $title, $year, $language, $type)
    {
        $this->original_title = $original_title;
        $this->title = $title;
        $this->year = $year;
        $this->language = $language;
        $this->genre = $genre;
    }

    public function GetTitles() {
        return $original_title . $title;
    }
}

$movie1 = new Movie ('Fall', 'Fall', '2022', 'en', 'Romance');
$movie2 = new Movie ('The Good Father', 'Il Padrino', '1990', 'en', 'Drammatic');
$movie3 = new Movie ('Goodfellas', 'Quei Bravi Ragazzi', '2022', 'en', 'Suspance');

?>

