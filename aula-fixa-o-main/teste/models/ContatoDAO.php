<?php

require_once __DIR__ . '/../config/database.php';
require_once 'Contato.php';

class ContatoDAO {

    private $conn;

    public function __construct() {
        $this->conn = Conexao::getConexao();
    }

    public function create(Contato $c) {

        $sql = "INSERT INTO contatos(nome, telefone, email)
                VALUES (?, ?, ?)";

        $stmt = $this->conn->prepare($sql);

        $stmt->execute([
            $c->getNome(),
            $c->getTelefone(),
            $c->getEmail()
        ]);
    }

    public function readAll() {

        return $this->conn
                    ->query("SELECT * FROM contatos")
                    ->fetchAll(PDO::FETCH_ASSOC);
    }

    public function buscarPorId($id) {

        $sql = "SELECT * FROM contatos WHERE id = ?";

        $stmt = $this->conn->prepare($sql);

        $stmt->execute([$id]);

        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function update(Contato $c) {

        $sql = "UPDATE contatos
                SET nome=?, telefone=?, email=?
                WHERE id=?";

        $stmt = $this->conn->prepare($sql);

        $stmt->execute([
            $c->getNome(),
            $c->getTelefone(),
            $c->getEmail(),
            $c->getId()
        ]);
    }

    public function delete($id) {

        $sql = "DELETE FROM contatos WHERE id=?";

        $stmt = $this->conn->prepare($sql);

        $stmt->execute([$id]);
    }
}