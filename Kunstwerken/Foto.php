<?php

namespace Kunstwerken;

class Foto extends AbstractKunstWerk implements AfbeeldingInterface
{
    public $afbeelding;

    public function getAfbeelding(): string {
        return $this->afbeelding;
    } 

    public function setAfbeelding(string $afbeelding): void {
        $this->afbeelding = $afbeelding;
    }
}


