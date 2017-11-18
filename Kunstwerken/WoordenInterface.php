<?php

namespace Kunstwerken;

interface Woordeninterface 
{
    public function getWoorden(): int;
    public function setWoorden(int $aantal_woorden);
}