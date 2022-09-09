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
    public function __construct($original_title, $title, $year, $language, $type)
    {
        $this->original_title = $original_title;
        $this->title = $title;
        $this->year = $year;
        $this->language = $language;
        $this->genre = $genre;
    }
    
    // all'interno della classe è definito almeno un metodo
    public function GetTitles() {
        return $original_title .- $title;
    }
}

// istanze
$movie1 = new Movie ('Fall', 'Fall', '2022', 'en', 'Romance');
$movie2 = new Movie ('The Good Father', 'Il Padrino', '1990', 'en', 'Drammatic');
$movie3 = new Movie ('Goodfellas', 'Quei Bravi Ragazzi', '2022', 'en', 'Suspance');

// vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà
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
   
</body>
</html>


