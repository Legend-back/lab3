<?php
require_once "Autor.php";
require_once "Libro.php";
require_once "IPublicable.php";

class Revista extends Libro implements IPublicable {
    private string $periodicidad;

    public function __construct(string $titulo, int $anio, Autor $autor, string $periodicidad) {
        parent::__construct($titulo, $anio, $autor);
        $this->periodicidad = $periodicidad;
    }

    public function getInfo(): string {
        // reutiliza la info de Libro y antepone la periodicidad
        return "Revista: {$this->periodicidad} - " . parent::getInfo();
    }
}
