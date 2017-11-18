<?php

namespace Kunstwerken;

// De andere classes worden hier aan verbonden,
// Want ze hebben allemaal deze property's gemeen.
abstract class AbstractKunstWerk {

    public $title;
    public $jaar;
    public $kunstenaar;

    // Ik wil in index.php de title, jaar, kunstenaar kunnen toevoegen als ik een class oproep.
    // Daarom heb ik deze methods toegevoegd.
    public function getTitle() {
        return $this->title;
    }

    public function setTitle($title) {
        $this->title = $title;
    }

    // jaar
    public function getYear() {
        return $this->jaar;
    }

    public function setYear($jaar) {
        $this->jaar = $jaar;
    }

    public function getArtist() {
        return $this->kunstenaar;
    }

    // kunstenaar
    public function setArtist($kunstenaar) {
        $this->kunstenaar = $kunstenaar;
    }  
}


