<?php
include_once("conecta.php"); // Inclui o arquivo de conexão com o banco de dados

// Obtém os dados do formulário
$cliente_cpf = $_POST['in_clientecpf'];
$nome = $_POST['in_nome'];
$endereco = $_POST['in_endereco'];
$telefone = $_POST['in_telefone'];

// Monta a consulta SQL para inserir um novo cliente
$sql = "INSERT INTO cliente (cliente_cpf, nome, endereco, telefone) VALUES ('$cliente_cpf', '$nome', '$endereco', '$telefone')";
mysqli_query($conexao, $sql); // Executa a consulta

mysqli_close($conexao); // Fecha a conexão com o banco de dados
header("Location: index.php"); // Redireciona para a página principal
