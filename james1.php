<?php

namespace Cantores\HeavyMetal;

class James{
    public $canta;

   

    public function dizOi($estiloMusical){
        $this->canta = $estiloMusical;
        echo( 'Oi sou James HatField e canto: ' . $this->canta);
    }

}
