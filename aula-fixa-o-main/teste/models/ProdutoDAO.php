<?php

require_once __DIR__ . '/../config/database.php';
require_once 'Produto.php';

class ProdutoDAO {

    private $conn;

    public function __construct() {
        $this->conn = Conexao::getConexao();
    }

    public function create(Produto $p) {

        $sql = "INSERT INTO produtos(nome, preco, quantidade)
                VALUES (?, ?, ?)";

        $stmt = $this->conn->prepare($sql);

        $stmt->execute([
            $p->getNome(),
            $p->getPreco(),
            $p->getQuantidade()
        ]);
    }

    public function readAll() {

        return $this->conn
                    ->query("SELECT * FROM produtos")
                    ->fetchAll(PDO::FETCH_ASSOC);
    }

    public function buscarPorId($id) {

        $sql = "SELECT * FROM produtos WHERE id = ?";

        $stmt = $this->conn->prepare($sql);

        $stmt->execute([$id]);

        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function update(Produto $p) {

        $sql = "UPDATE produtos
                SET nome=?, preco=?, quantidade=?
                WHERE id=?";

        $stmt = $this->conn->prepare($sql);

        $stmt->execute([
            $p->getNome(),
            $p->getPreco(),
            $p->getQuantidade(),
            $p->getId()
        ]);
    }

    public function delete($id) {

        $sql = "DELETE FROM produtos WHERE id=?";

        $stmt = $this->conn->prepare($sql);

        $stmt->execute([$id]);
    }
}