<?php

namespace Kunstwerken;

interface DigitaleKunstwerkenInterface {
    public function getUri(): ? string;

    public function setUri(string $uri);
}


