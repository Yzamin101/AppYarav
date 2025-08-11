<?php
require_once 'Usuario.php';
require_once '../config/Database.php';

class UsuarioDAO {
    private $conn;

    public function __construct() {
        $db = new Database();
        $this->conn = $db->getConnection();
    }

    // Busca um usuário pelo email
    public function buscarPorEmail($email) {
        $query = "SELECT * FROM usuarios WHERE email = :email";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':email', $email);
        $stmt->execute();
        $usuario = $stmt->fetch(PDO::FETCH_ASSOC);

        // Retorna null se não encontrar
        return $usuario ?: null;
    }

    // Busca um usuário pelo nome
    public function buscarPorNome($nome) {
        $query = "SELECT * FROM usuarios WHERE nome = :nome";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':nome', $nome);
        $stmt->execute();
        $usuario = $stmt->fetch(PDO::FETCH_ASSOC);

        return $usuario ?: null;
    }

    // Valida o login
    public function validarLogin($email, $senha) {
        $usuario = $this->buscarPorEmail($email);

        // Verifica se encontrou e se a senha está correta
        if ($usuario && isset($usuario['senha_hash']) && password_verify($senha, $usuario['senha_hash'])) {
            return new Usuario($usuario); // Cria objeto Usuario
        }

        // Retorna null se falhar
        return null;
    }
}
