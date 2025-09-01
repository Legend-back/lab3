<?php
require_once "Autor.php";
require_once "Libro.php";
require_once "Revista.php"; 

// ---- autores 
$autorElenaWhite = new Autor("Elena G. de White", "Americana");
$autorCSLewis    = new Autor("C. S. Lewis", "Británico");
$autorGabo       = new Autor("Gabriel García Márquez", "Colombiano");
$autorBorges     = new Autor("Jorge Luis Borges", "Argentino");

// Mostrar autores 
echo $autorElenaWhite->getInfo()."\n";
echo $autorCSLewis->getInfo()."\n";
echo $autorGabo->getInfo()."\n";
echo $autorBorges->getInfo()."\n";

//  libros
$libro1 = new Libro("Mere Christianity", 1952, $autorCSLewis);
$libro2 = new Libro("Ficciones", 1944, $autorBorges);

// imprimir SOLO una vez cada libro
echo "\n".$libro1->getInfo()."\n";
echo "\n".$libro2->getInfo()."\n";
