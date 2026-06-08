<?php

require_once 'ClienteDAO.php';

$dao = new ClienteDAO();

$dao->delete($_GET['id']);

header("Location: listar_clientes.php");