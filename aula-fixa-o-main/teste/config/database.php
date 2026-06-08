<?php

class Conexao {

    public static function getConexao() {

        try {

            $conn = new PDO(
                "mysql:host=localhost;dbname=agenda",
                "root",
                ""
            );

            $conn->setAttribute(
                PDO::ATTR_ERRMODE,
                PDO::ERRMODE_EXCEPTION
            );

            return $conn;

        } catch(PDOException $e) {

            die("Erro na conexão: " . $e->getMessage());

        }
    }
}