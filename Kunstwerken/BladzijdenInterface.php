<?php

namespace Kunstwerken;

interface BladzijdenInterface {
    public function getBladzijden(): int;
    public function setBladzijden(int $aantal_bladzijden);
}