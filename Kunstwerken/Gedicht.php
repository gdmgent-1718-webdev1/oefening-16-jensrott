<?php

namespace Kunstwerken;

class Gedicht extends AbstractKunstWerk implements WoordenInterface 
{
    public $aantal_woorden;

    public function getWoorden(): int 
    {
        return $this->aantal_woorden;
    }

    public function setWoorden(int $aantal_woorden) {
        $this->aantal_woorden = $aantal_woorden;
    }
}


