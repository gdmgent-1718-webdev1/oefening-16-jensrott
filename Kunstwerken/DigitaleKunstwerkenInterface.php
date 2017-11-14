<?php

namespace Kunstwerken;

// Dit is een interface voor alle digitale kunstwerken
// Ik ben hier wel niet honderd procent zeker over of dit wel nodig is
interface DigitaleKunstwerkenInterface {
    public function getUri(): ? string;

    public function setUri(string $uri);
}


?>