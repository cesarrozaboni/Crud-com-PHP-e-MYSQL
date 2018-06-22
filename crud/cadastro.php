<?php
?>

<!--CSS-->
<link rel = "stylesheet" type = "text/css" href = "form.css"/>

<!--JAVASCRIPT PARA VALIDAÇÃO DE FORMULARIOS-->
<script type = "text/javascript" src = "validacao.js"></script>
<meta charset="UTF-8">

<body class="container">

    <!--Titulo-->
    <h1 class="titulo">Cadastro de Pessoas</h1>

    <!--Formulário de cadastro de Pessoas-->
    <form name="cadastroPessoa" action="conexao.php" method="POST" onsubmit="return validar();">

        <label class="lbl">Nome</label>
        <input class="cadastro" type="text" name="nome" />

        <label class="lbl">Data de nascimento</label>
        <input class="cadastro" type="date" name="data" />

        <label class="lbl">Sexo</label>
        <select class ="cadastro" name="sexo">
            <option value=""></option>
            <option value="m">Masculino</option>
            <option value="f">Feminino</option>
        </select>

        <label class="lbl">Telefone</label>
        <input  class="cadastro" type="text" name="telefone" />

        <label class="lbl">Email</label>
        <input class="cadastro" type="text" name="email" />
        <br><br>

        <button class="success" name="acao" value="inserir">Enviar</button>

     </form>
   <form action="conexao.php" method="post">
       <button class="danger" name="acao" value="voltar">Voltar</button>
   </form>

</body>
