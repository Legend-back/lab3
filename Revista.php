<?php
require_once "Autor.php";
require_once "Libro.php";
require_once "IPublicable.php";

class Revista implements IPublicable {
    private string $periodicidad;

    public function __construct(string $titulo, int $anio, Autor $autor, string $periodicidad) {
        parent::__construct($titulo, $anio, $autor);
        $this->periodicidad = $periodicidad;
    }

    public function getInfo(): string {
        return "Revista: {$this->periodicidad} - " . parent::getInfo();
    }
}
