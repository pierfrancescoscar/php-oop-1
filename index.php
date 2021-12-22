<!-- Oggi pomeriggio ripassate i primi concetti di classe e di variabili e
metodi d’istanza che abbiamo visto stamattina e create un file index.php in cui:
- è definita una classe ‘Movie’
   => all’interno della classe sono dichiarate delle variabili d’istanza
   => all’interno della classe è definito un costruttore
   => all’interno della classe è definito almeno un metodo
- vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà -->

<?php
class Movie {
    // Variables
    public $title;
    public $genre;
    public $year;
    public $author;

    function __construct($title,$genre,$year,$author) {
        $this->title = $title;
        $this->genre = $genre;
        $this->year = $year;
        $this->author = $author;
    }

    public function bestMovie() {
        if ($this->title == 'Austin Powers') {
            return "<h2>Best movie ever.</h2>";
        } else {
            return "<h2>A great film, but not like the greatest.</h2>";
        }
    }

}

$movie1 = new Movie
('Austin Powers', 'Comedy', '2002', 'Jay Roach');

var_dump($movie1);

echo $movie1->bestMovie();

echo '<hr>';

$movie2 = new Movie
('I Origin', 'Dramatic', '2014', 'Mike Cahill');

var_dump($movie2);

echo $movie2->bestMovie();

echo '<hr>';


