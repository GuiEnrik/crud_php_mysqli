<?php
include("conecta.php");

$cliente_cpf = $_GET['cliente_cpf'];
$sql = "DELETE FROM cliente WHERE cliente_cpf='$cliente_cpf'";
mysqli_query($conexao, $sql);

mysqli_close($conexao);
header("Location: index.php");
