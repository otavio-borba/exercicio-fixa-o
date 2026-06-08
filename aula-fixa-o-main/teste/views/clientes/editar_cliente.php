<?php

require_once '../../models/ClienteDAO.php';

$dao = new ClienteDAO();

$cliente = $dao->buscarPorId($_GET['id']);

?>

<form action="atualizar_cliente.php" method="post">

<input type="hidden" name="id" value="<?= $cliente['id'] ?>">

Nome:
<input type="text" name="nome" value="<?= $cliente['nome'] ?>"><br>

CPF:
<input type="text" name="cpf" value="<?= $cliente['cpf'] ?>"><br>

Email:
<input type="email" name="email" value="<?= $cliente['email'] ?>"><br>

<button>Atualizar</button>

</form>