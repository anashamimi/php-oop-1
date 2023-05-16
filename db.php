<?php
include __DIR__ . '/Models/Movie.php';
$movies= [
    new Movie('1', 'Il Padrino', 'The Godfather', 'en', '1972-03-24', '9.2', 
    'https://www.themoviedb.org/t/p/w600_and_h900_bestv2/r4gnMXoY1efvaolNDjn3nj4046S.jpg',
    ['mafia', 'giallo', 'dramma']),
    new Movie('2', 'Via Col Vento', 'Gone With The Wind', 'en', '1939-12-15', '8.6', 
    'https://www.themoviedb.org/t/p/w600_and_h900_bestv2/xRyW60TXvX7Q2HSbpz8nZxKaTkL.jpg',
    ['romantico', 'guerra', 'fiction', 'dramma']),
    new Movie('3', 'Psycho', 'Psycho', 'en', '1960-06-16', '9.4', 
    'https://www.themoviedb.org/t/p/w600_and_h900_bestv2/tdqX0MWaFHuGwUygYn7j6eluOdP.jpg',
    ['giallo', 'thriller', 'adventure']),
    new Movie('4', 'Gravity', 'Gravity', 'en', '2013-08-28', '7.8', 
    'https://www.themoviedb.org/t/p/w600_and_h900_bestv2/4pRXqT7wQmoH5sH6Z4WYmbAFG4t.jpg',
    ['fantascienza', 'thriller', 'drammatico']),
];

