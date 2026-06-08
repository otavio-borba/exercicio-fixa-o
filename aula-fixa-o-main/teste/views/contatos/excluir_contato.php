<?php

require_once 'ContatoDAO.php';

$dao = new ContatoDAO();

$dao->delete($_GET['id']);

header("Location: listar_contatos.php");