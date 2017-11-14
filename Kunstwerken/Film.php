<?php

namespace Kunstwerken;

class Film extends AbstractKunstWerk implements DigitaleKunstwerkenInterface  
{
    public $afbeelding;
    public $duur;

    public function getUri(): ?string {
        // Geen dollarteken
        return $this->uri;
    } 

    public function setUri(string $uri): void {
        $this->uri = $uri;
    }
}


?>