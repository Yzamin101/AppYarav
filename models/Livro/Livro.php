<?php
class Livro {
    private $titulo;
    private $autor;
    private $ano;
    private $isbn;

    public function __construct($titulo, $autor, $ano, $isbn) {
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->ano = $ano;
        $this->isbn = $isbn;
    }

    public function getTitulo() { return $this->titulo; }
    public function getAutor() { return $this->autor; }
    public function getAno() { return $this->ano; }
    public function getIsbn() { return $this->isbn; }
}