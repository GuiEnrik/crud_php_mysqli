<?php
include("conecta.php"); // Inclui o arquivo de conexão com o banco de dados

$cliente_cpf = $_GET['cliente_cpf']; // Obtém o CPF do cliente a ser deletado via GET
$sql = "DELETE FROM cliente WHERE cliente_cpf='$cliente_cpf'"; // Monta a consulta SQL para deletar o cliente
$result = mysqli_query($conexao, $sql); // Executa a consulta

// Verifica se a consulta foi bem-sucedida
if (!$result) {
  die("Erro na deleção: " . mysqli_error($conexao));
}

mysqli_close($conexao); // Fecha a conexão com o banco de dados
header("Location: index.php"); // Redireciona para a página principal
