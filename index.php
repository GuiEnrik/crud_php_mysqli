<?php
include_once("conecta.php"); // Inclui o arquivo de conexão com o banco de dados

// Verifica se o parâmetro 'cliente_cpf' foi passado via GET
if (isset($_GET["cliente_cpf"])) {
    // Monta a consulta SQL para buscar os dados do cliente com o CPF especificado
    $query = "SELECT * FROM cliente WHERE cliente_cpf = " . $_GET["cliente_cpf"];
    $result = mysqli_query($conexao, $query); // Executa a consulta

    // Verifica se a consulta foi bem-sucedida
    if (!$result) {
        die("Erro na consulta: " . mysqli_error($conexao));
    }

    $dado = mysqli_fetch_assoc($result); // Obtém o resultado da consulta

    // Atribui os valores retornados da consulta às variáveis
    $cpf = $dado["cliente_cpf"];
    $nome = $dado["nome"];
    $endereco = $dado["endereco"];
    $telefone = $dado["telefone"];
}
?>
<html>

<head>
    <title>Meu CRUD</title>
    <meta charset="utf-8">
    <!-- Bootstrap CSS-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>

<body class="container">
    <h1>CLIENTES</h1>
    <form method='POST' role='form' action='<?= isset($_GET["cliente_cpf"]) ? "update.php" : "create.php" ?>'>
        <div class='form-group'>
            <label for='in_clientecpf'>Cliente CPF</label>
            <input name='in_clientecpf' <?= isset($_GET["cliente_cpf"]) ? "readonly" : "" ?> required id='in_clientecpf' class='form-control' type='text' value='<?= isset($_GET["cliente_cpf"]) ? $cpf : "" ?>'>
        </div>
        <div class='form-group'>
            <label for='in_nome'>Nome</label>
            <input name='in_nome' required id='in_nome' class='form-control' type='text' value='<?= isset($_GET["cliente_cpf"]) ? $nome : "" ?>'>
        </div>
        <div class='form-group'>
            <label for='in_endereco'>Endereco</label>
            <input name='in_endereco' required id='in_endereco' class='form-control' type='text' value='<?= isset($_GET["cliente_cpf"]) ? $endereco : "" ?>'>
        </div>
        <div class='form-group'>
            <label for='in_telefone'>Telefone</label>
            <input name='in_telefone' required id='in_telefone' class='form-control' type='text' value='<?= isset($_GET["cliente_cpf"]) ? $telefone : "" ?>'>
        </div>
        <div class='mt-2'>
            <input class="btn btn-success" name='btn_submit' value='Salvar' type='submit'>
        </div>
    </form>
    <?php include_once("read.php"); ?>
</body>

</html>