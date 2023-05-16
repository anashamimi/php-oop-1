<?php

class Movie
{
    public $id;
    public $title;
    public $original_title;
    public $nationality;
    public $date;
    public $vote;
    public $image;
    public $category = [];

    public function __construct($id, $title, $original_title, 
    $nationality, $date, $vote, $image, $category)
    {
        $this->id = $id;
        $this->title = $title;
        $this->original_title = $original_title;
        $this->nationality = $nationality;
        $this->date = $date;
        $this->vote = $vote;
        $this->image = $image;
        $this->category = $category;        
    }

    public function getFlag()
    {
        $flags = [
            'en' => './img/en.png',  
            'it' => './img/it.png', 
            'fr' => './img/fr.png', 
            'de' => './img/de.png', 
            
        ];
    
        if (array_key_exists($this->nationality, $flags)) {
            return $flags[$this->nationality];
        }
    
        return null; // Restituisce null se la nazionalità non ha una bandiera corrispondente
    }
}