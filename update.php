<?php
include("conecta.php");

$cliente_cpf = $_POST['in_clientecpf'];
$nome = $_POST['in_nome'];
$endereco = $_POST['in_endereco'];
$telefone = $_POST['in_telefone'];

$sql = "UPDATE cliente SET nome='$nome', endereco='$endereco', telefone='$telefone' WHERE cliente_cpf='$cliente_cpf'";
mysqli_query($conexao, $sql);

mysqli_close($conexao);
header("Location: index.php");
