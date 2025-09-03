<?php

require_once "Autor.php";
require_once "Libro.php";
require_once "Revista.php";
require_once "ImprimirAutor.php";


$autorElenaWhite = new Autor("Elena G. de White", "Americana");
$autorCSLewis    = new Autor("C. S. Lewis", "Británico");
$autorGabo       = new Autor("Gabriel García Márquez", "Colombiano");
$autorBorges     = new Autor("Jorge Luis Borges", "Argentino");


$impresor = new ImprimirAutor();
echo $imp->getInfo($autorElenaWhite) . "\n";
echo $imp->getInfo($autorCSLewis)    . "\n";
echo $imp->getInfo($autorGabo)       . "\n";
echo $imp->getInfo($autorBorges)     . "\n";


$libro1 = new Libro("Mere Christianity", 1952, $autorCSLewis);
$libro2 = new Libro("Ficciones", 1944, $autorBorges);


$revista1 = new Revista("Revista Adventista", 2023, $autorCSLewis, "Mensual");
$revista2 = new Revista("Revista Literaria", 2021, $autorBorges, "Trimestral");


$publicables = [$libro1, $libro2, $revista1, $revista2];


echo "\n";
foreach ($publicables as $item) {
    echo $item->getInfo() . "\n";
}

