<?php

namespace Kunstwerken;

class Boek extends AbstractKunstWerk implements BladzijdenInterface, WoordenInterface 
{
    public $aantal_bladzijden;
    public $aantal_woorden;

    public function getBladzijden() :int {
        return $this->aantal_bladzijden;
    }
 
    public function setBladzijden(int $aantal_bladzijden): void {
        $this->aantal_bladzijden = $aantal_bladzijden;
    }
 
    public function getWoorden() :int {
        return $this->aantal_woorden;
    } 
 
    public function setWoorden(int $aantal_woorden) :void {
        $this->aantal_woorden = $aantal_woorden;
    }
}


