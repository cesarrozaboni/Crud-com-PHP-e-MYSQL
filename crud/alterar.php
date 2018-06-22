<?php

/*
 *
 * Formulário para alterar pessoas
 *
 */
include("conexao.php");
$pessoa = selectIdPessoa($_POST["id"]);

?>

<!--CSS-->
<link rel="stylesheet" type="text/css" href="form.css"/>

<!--JAVASCRIP PARA VALIDAÇÂO DE FORMULARIOS-->
<script type="text/javascript" src="validacao.js"></script>
<meta charset="UTF-8">

<body class="container">


<!--Titulo-->
<h1 class="titulo">Alterar Pessoas</h1>

<!--Formulário de alteração de Pessoas-->
<form name="cadastroPessoa" action="conexao.php" method="POST" onsubmit="return validar()">

    <label class="lbl">Nome</label>
    <input class="cadastro" type="text" name="nome" value="<?= $pessoa["pesNome"] ?>"/>

    <label class="lbl">Data de nascimento</label>
    <input class="cadastro" type="date" name="data" value="<?= $pessoa["pesDataNascimento"] ?>"/>

    <label class="lbl">Sexo</label>
    <select class="cadastro" name="sexo">
        <option value="m">Masculino</option>
        <option value="f">Feminino</option>
    </select>

    <label class="lbl">Telefone</label>
    <input class="cadastro" type="text" name="telefone" value="<?= $pessoa["pesTelefone"] ?>"/>

    <label class="lbl">Email</label>
    <input class="cadastro" type="text" name="email" value="<?= $pessoa["pesEmail"] ?>"/>
    <br><br>


    <input type="hidden" name="id" value="<?= $pessoa["pesId"] ?>"/>
    <button class="success" type="submit" name="acao" value="alterar">Alterar</button>


</form>
<form action="conexao.php" method="post">
    <button class="danger" type="submit" name="acao" value="voltar">Voltar</button>
</form>
</body>

