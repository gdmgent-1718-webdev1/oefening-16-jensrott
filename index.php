<?php

require 'Kunstwerken/AbstractKunstWerk.php';

spl_autoload_register(function($name) {
    $path = "${name}.php";
    require_once str_replace('\\', DIRECTORY_SEPARATOR, $path);
});

$kunstwerk1 = new Kunstwerken\Beeldhouwerk();
$kunstwerk2 = new Kunstwerken\Boek();
$kunstwerk3 = new Kunstwerken\Dans();
$kunstwerk4 = new Kunstwerken\Film();
$kunstwerk5 = new Kunstwerken\Foto();
$kunstwerk6 = new Kunstwerken\Gedicht();
$kunstwerk7 = new Kunstwerken\Lied();
$kunstwerk8 = new Kunstwerken\Schilderij();
$kunstwerk9 = new Kunstwerken\Vaas();



?>