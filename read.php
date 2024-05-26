<table class="table table-striped">
    <tr>
        <th>Cliente CPF</th>
        <th>Nome</th>
        <th>Endereco</th>
        <th>Telefone</th>
        <th>Editar</th>
        <th>Apagar</th>
    </tr>

    <?php
    include_once("conecta.php");

    $result = mysqli_query($conexao, "SELECT * FROM cliente ORDER BY nome");
    while ($linha = mysqli_fetch_assoc($result)) {
    ?>
        <tr>
            <td><?= $linha['cliente_cpf'] ?></td>
            <td><?= $linha['nome'] ?></td>
            <td><?= $linha['endereco'] ?></td>
            <td><?= $linha['telefone'] ?></td>
            <td><a href="index.php?cliente_cpf=<?= $linha['cliente_cpf'] ?>">EDITAR</a></td>
            <td><a href="delete.php?cliente_cpf=<?= $linha['cliente_cpf'] ?>">APAGAR</a></td>
        </tr>
    <?php
    }

    mysqli_close($conexao);
    ?>
</table>