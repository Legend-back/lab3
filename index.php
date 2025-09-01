<?php
require_once("Autor.php");

$autorElenaWhite = new Autor("Elena G. de White", "Americana");
$autorCSLewis    = new Autor("C. S. Lewis", "Británico");
$autorGabo       = new Autor("Gabriel García Márquez", "Colombiano");
$autorBorges     = new Autor("Jorge Luis Borges", "Argentino");

echo $autorElenaWhite->getInfo() . "\n";
echo $autorCSLewis->getInfo()    . "\n";
echo $autorGabo->getInfo()       . "\n";
echo $autorBorges->getInfo()     . "\n";



require_once "Libro.php";

// crea 2 libros
$libro1 = new Libro("Mere Christianity", 1952, $autorCSLewis);
$libro2 = new Libro("Ficciones", 1944, $autorBorges);

// imprimir
echo $libro1->getInfo() . "\n\n";
echo $libro2->getInfo() . "\n\n";
