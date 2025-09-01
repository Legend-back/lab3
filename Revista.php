<?php
require_once "Autor.php";
require_once "Libro.php";

class Revista extends Libro {
    private string $periodicidad;

    public function __construct(string $titulo, int $anio, Autor $autor, string $periodicidad) {
        parent::__construct($titulo, $anio, $autor);
        $this->periodicidad = $periodicidad;
    }

    public function getInfo(): string {
        // agrega su dato y luego reutiliza la info del libro
        return "Revista: {$this->periodicidad} - " . parent::getInfo();
    }
}
