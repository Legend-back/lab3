<?php
require_once "Autor.php";

class Libro {
    private string $titulo;
    private int $anio;
    private Autor $autor;

    public function __construct(string $titulo, int $anio, Autor $autor) {
        $this->titulo = $titulo;
        $this->anio   = $anio;
        $this->autor  = $autor;
    }

    public function getInfo(): string {
        return "Libro: {$this->titulo} ({$this->anio})\n" . $this->autor->getInfo();
    }
}
