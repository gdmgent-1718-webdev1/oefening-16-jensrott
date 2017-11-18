<?php

namespace Kunstwerken;

interface GewichtInterface {
    public function getGewicht(): int;
    public function setGewicht(int $gewicht);
}