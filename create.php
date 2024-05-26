<?php
include_once("conecta.php");

$cliente_cpf = $_POST['in_clientecpf'];
$nome = $_POST['in_nome'];
$endereco = $_POST['in_endereco'];
$telefone = $_POST['in_telefone'];

$sql = "INSERT INTO cliente (cliente_cpf, nome, endereco, telefone) VALUES ('$cliente_cpf', '$nome', '$endereco', '$telefone')";
mysqli_query($conexao, $sql);

mysqli_close($conexao);
header("Location: index.php");
