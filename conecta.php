<?php
// Dados para conexão com o banco de dados
$servidor = 'nome_seu_servidor'; // Host
$banco = 'nome_do_seu_banco'; // Nome do banco de dados
$usuario = 'seu_usuario'; // Usuário
$senha = 'sua_senha'; // Senha

// Cria a conexão com o banco de dados
$conexao = mysqli_connect($servidor, $usuario, $senha, $banco);

// Verifica se a conexão falhou
if (!$conexao) {
    die("Falha na conexão: " . mysqli_connect_error()); // Exibe mensagem de erro em caso de falha
}
