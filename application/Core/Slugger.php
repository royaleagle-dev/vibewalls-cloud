<?php

class Slugger{
    
    private $text;
    
    public function __construct($text){
        $this->text = $text;
    }   

    public function create(){
        $text = strtolower($this->text);
        $text = preg_replace('~[^a-z0-9]+~', '-', $text);
        $text = trim($text, '-');
        $text = preg_replace('~-+~', '-', $text);
        return $text;
    }
}




?>