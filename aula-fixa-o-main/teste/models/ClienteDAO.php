<?php

require_once __DIR__ . '/../config/database.php';
require_once 'Cliente.php';

class ClienteDAO {

    private $conn;

    public function __construct() {
        $this->conn = Conexao::getConexao();
    }

    public function buscarPorId($id) {

        $sql = "SELECT * FROM clientes WHERE id = ?";

        $stmt = $this->conn->prepare($sql);

        $stmt->execute([$id]);

        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function delete($id) {

        $sql = "DELETE FROM clientes WHERE id = ?";

        $stmt = $this->conn->prepare($sql);

        $stmt->execute([$id]);
    }
}
