<?php

require_once 'ProdutoDAO.php';

$dao = new ProdutoDAO();

$dao->delete($_GET['id']);

header("Location: listar_produtos.php");