<?php
/**
 * Created by PhpStorm.
 * User: Cesar
 * Date: 21/06/2018
 * Time: 00:01
 */

include("conexao.php");

if ($_POST == null) {
    $_POST["nomeConsulta"] = "";
    $pessoa = consultaPessoa($_POST["nomeConsulta"]);
}

?>
<!--CSS-->
<link rel="stylesheet" type="text/css" href="form.css"/>

<meta charset="UTF-8">
<body class="container">

<!--Titulo-->
<h1 class="titulo">Consultar Pessoa</h1>

<!--Formulário de consulta-->
<form method="post">
    <label class="lbl">Nome</label>
    <input type="text" name="nomeConsulta" value="">

    <button class="success" type="submit" name="acao" value="consultar">Pesquisar</button>
    <button class="danger" type="submit" name="acao" value="voltar">Voltar</button>
</form>
<!--Exibe as informações da consulta em tabela-->
<table border="1" class="tabela">

    <thead>
    <tr class="tr">
        <th>Nome</th>
        <th>Data de Nascimento</th>
        <th>Sexo</th>
        <th>Telefone</th>
        <th>Email</th>
    </tr>
    </thead>

    <tbody>

    <?php
    $pessoa = consultaPessoa($_POST["nomeConsulta"]);
    //Formata a data
    function formatoData($data)
    {
        if ($data != "" && $data != null) {
            $array = explode("-", $data);
            $novaData = $array[2] . "/" . $array["1"] . "/" . $array[0];
            return $novaData;
        }
    }

    ?>

    <tr>
        <td><?= $pessoa["pesNome"] ?></td>
        <td><?= formatoData($pessoa["pesDataNascimento"]) ?></td>
        <td><?= $pessoa["pesSexo"] ?></td>
        <td><?= $pessoa["pesTelefone"] ?></td>
        <td><?= $pessoa["pesEmail"] ?></td>
    </tr>
    </tbody>
</table>
