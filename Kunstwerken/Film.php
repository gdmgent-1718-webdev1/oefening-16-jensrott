<?php

namespace Kunstwerken;

class Film extends AbstractKunstWerk implements AfbeeldingInterface, DuurInterface 
{
    public $afbeelding;
    public $duur;


    public function getAfbeelding(): string {
        return $this->afbeelding;
    } 

    public function setAfbeelding(string $afbeelding): void {
        $this->afbeelding = $afbeelding;
    }

    public function getDuur(): int {
        // Geen dollarteken
        return $this->duur;
    } 

    public function setDuur(int $duur): void {
        $this->duur = $duur;
    }
}


