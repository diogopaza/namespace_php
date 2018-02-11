<?php

namespace Cantores\TripHop;
use \PDO;

class James{
    public $canta;
    private $banco;


   

    public function dizOi($estiloMusical){
        $this->canta = new PDO('mysql:host=localhost;dbname=blog', 'root','');
        $this->canta = $estiloMusical;
        echo( 'Oi sou James Blunt e canto: ' . $this->canta .'<br/>');
    }
}





