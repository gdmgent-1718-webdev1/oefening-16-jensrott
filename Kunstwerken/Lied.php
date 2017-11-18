<?php

namespace Kunstwerken;

class Lied extends AbstractKunstWerk implements DuurInterface 
{
    public $duur;

    public function getDuur(): int {
        return $this->duur;
    } 

    public function setDuur(int $duur): void {
        $this->duur = $duur;
    }
}


