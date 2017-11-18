<?php

namespace Kunstwerken;

class Schilderij extends AbstractKunstWerk implements AfbeeldingInterface
{
    public $afbeelding;

    public function getAfbeelding() :string {
        return $this->afbeelding;
    }
 
    public function setAfbeelding(string $afbeelding): void {
        $this->afbeelding = $afbeelding;
    }
}


