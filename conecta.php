<?php
$servidor = 'nome_seu_servidor'; // host
$banco = 'nome_do_seu_banco'; // nome banco
$usuario = 'seu_usuario'; // usuario
$senha = 'sua_senha'; // senha

$conexao = mysqli_connect($servidor, $usuario, $senha, $banco);

if (!$conexao) {
    die("Falha na conexão: " . mysqli_connect_error());
}
