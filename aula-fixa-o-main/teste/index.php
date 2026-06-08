<?php

$pagina = $_GET['pagina'] ?? '';

switch($pagina){

    case 'cliente':
        require 'views/clientes/cadastrar_cliente.php';
        break;

    case 'contato':
        require 'views/contatos/cadastrar_contato.php';
        break;

    case 'produto':
        require 'views/produtos/cadastrar_produto.php';
        break;

    default:
        echo "<h2>Sistema de Cadastro</h2>";

        echo "<a href='?pagina=cliente'>Clientes</a><br><br>";

        echo "<a href='?pagina=contato'>Contatos</a><br><br>";

        echo "<a href='?pagina=produto'>Produtos</a>";
}