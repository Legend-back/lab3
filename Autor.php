<?php

class Autor {
    private string $nombre;
    private string $nacionalidad;

    public function __construct(string $nombre, string $nacionalidad) {
        $this->nombre = $nombre;
        $this->nacionalidad = $nacionalidad;
    }

    public function getInfo(): string {
        return "Autor: {$this->nombre} ({$this->nacionalidad})";
    }
}
