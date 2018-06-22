<!DOCTYPE html>
<!--
Index
-->

<?php include("conexao.php");
$grupo = selectAllPessoa();
?>

<!--CSS-->
<link rel="stylesheet" type="text/css" href="form.css"/>

<html>
<head>
    <meta charset="UTF-8">
    <title>Cadastro de Pessoas</title>
</head>

<body class="container">
<!--Link para cadastrar novas pessoas-->
<h1 class="titulo">Cadastro de pessoas com PHP</h1>

<a href="cadastro.php">
    <button class="btnIndex">Cadastrar</button>
</a>

<!--Link para consultar pessoas-->
<a href="consulta.php">
    <button class="success">Consultar</button>
</a>
<br><br>

<!--Tabela para exibir pessoas cadastradas no banco de dados-->
<table border="1" class="tabela">
    <thead>
    <tr class="tr">
        <th>Nome</th>
        <th>Data de Nascimento</th>
        <th>Sexo</th>
        <th>Telefone</th>
        <th>Email</th>
        <th>Editar</th>
        <th>Excluir</th>
    </tr>
    </thead>
    <tbody>

    <?php
    //loop para recuperar os dados de todas pessoas cadastradas
    foreach ($grupo as $pessoa) {
        ?>
        <tr>
            <td><?= $pessoa["pesNome"] ?></td>
            <td><?= formatoData($pessoa["pesDataNascimento"]) ?></td>
            <td><?= $pessoa["pesSexo"] ?></td>
            <td><?= $pessoa["pesTelefone"] ?></td>
            <td><?= $pessoa["pesEmail"] ?></td>

            <!--Link para formulário de alteração de pessoas cadastradas-->
            <td>
                <form name="alterar" action="alterar.php" method="POST">
                    <input type="hidden" name="id" value="<?= $pessoa["pesId"] ?>"/>
                    <input class="btnAlterar" type="submit" value="Editar" name="editar"/>
                </form>
            </td>
            <!--Formulário para excluir pessoas-->
            <td>
                <form name="excluir" action="conexao.php" method="POST">
                    <input type="hidden" name="id" value="<?= $pessoa["pesId"] ?>"/>
                    <input type="hidden" name="acao" value="excluir"/>
                    <input class="btnExcluir" type="submit" value="Excluir" name="excluir"/>
                </form>
            </td>

        </tr>
        <?php
    }
    ?>
    </tbody>
</table>
<?php
//Função para exibir os formatos de data no padrão certo
function formatoData($data)
{
    $array = explode("-", $data);
    $novaData = $array[2] . "/" . $array["1"] . "/" . $array[0];
    return $novaData;
}

?>
</body>
</html>
