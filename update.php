<?php
include("conecta.php"); // Inclui o arquivo de conexão com o banco de dados

// Obtém os dados do formulário
$cliente_cpf = $_POST['in_clientecpf'];
$nome = $_POST['in_nome'];
$endereco = $_POST['in_endereco'];
$telefone = $_POST['in_telefone'];

// Monta a consulta SQL para atualizar os dados do cliente
$sql = "UPDATE cliente SET nome='$nome', endereco='$endereco', telefone='$telefone' WHERE cliente_cpf='$cliente_cpf'";
$result = mysqli_query($conexao, $sql); // Executa a consulta

// Verifica se a consulta foi bem-sucedida
if (!$result) {
  die("Erro na atualização: " . mysqli_error($conexao));
}

mysqli_close($conexao); // Fecha a conexão com o banco de dados
header("Location: index.php"); // Redireciona para a página principal
