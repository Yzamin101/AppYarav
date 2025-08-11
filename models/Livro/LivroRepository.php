<?php
class LivroRepository {
    private $filePath;
    private $livros = [];

    public function __construct() {
        $this->filePath = __DIR__ . '/../../../data/livros.json';

        if (file_exists($this->filePath)) {
            $json = file_get_contents($this->filePath);
            $this->livros = json_decode($json, true) ?? [];
        }
    }

    public function adicionar(Livro $livro) {
        $this->livros[] = [
            'titulo' => $livro->getTitulo(),
            'autor'  => $livro->getAutor(),
            'ano'    => $livro->getAno(),
            'isbn'   => $livro->getIsbn()
        ];
        $this->salvar(); // salva no JSON
    }
    

    public function listar() {
        return $this->livros;
    }

    public function editar($isbn, Livro $livroAtualizado) {
        foreach ($this->livros as &$livro) {
            if ($livro['isbn'] === $isbn) {
                $livro['titulo'] = $livroAtualizado->getTitulo();
                $livro['autor'] = $livroAtualizado->getAutor();
                $livro['ano'] = $livroAtualizado->getAno();
                $livro['isbn'] = $livroAtualizado->getIsbn();
                break;
            }
        }
        $this->salvar();
    }

    public function excluir($isbn) {
        $this->livros = array_filter($this->livros, fn($livro) => $livro['isbn'] !== $isbn);
        $this->livros = array_values($this->livros);
        $this->salvar();
    }

    private function salvar() {
        file_put_contents($this->filePath, json_encode($this->livros, JSON_PRETTY_PRINT));
    }
    
}
