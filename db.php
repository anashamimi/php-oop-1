<?php
include __DIR__ . '/Models/Movie.php';

$movies= [
    new Movie('1', 'Il Padrino', 'The Godfather', 'en', '1972-03-24', '9.2', 
    'https://www.themoviedb.org/t/p/w600_and_h900_bestv2/r4gnMXoY1efvaolNDjn3nj4046S.jpg',
    'adult'),
    new Movie('2', 'Via Col Vento', 'Gone With The Wind', 'en', '1939-12-15', '8.6', 
    'https://www.themoviedb.org/t/p/w600_and_h900_bestv2/xRyW60TXvX7Q2HSbpz8nZxKaTkL.jpg',
    'boy'),
];

var_dump($movies);