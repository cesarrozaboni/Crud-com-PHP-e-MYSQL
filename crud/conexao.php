<?php

if (isset($_POST["acao"])) {
    if ($_POST["acao"] == "inserir") {
        inserirPessoa();
    }
    if ($_POST["acao"] == "alterar") {
        alterarPessoa();
    }
    if ($_POST["acao"] == "excluir") {
        excluirPessoa();
    }
    if ($_POST["acao"] == "consultar") {
        consultaPessoa($_POST["nomeConsulta"]);
    }
    if ($_POST["acao"] == "voltar") {
        voltarIndex();
    }
}


function abrirBanco()
{
    $conexao = new mysqli("127.0.0.1", "root", "", "cadastro_pessoas");
    return $conexao;
}

function inserirPessoa()
{
    $banco = abrirBanco();
    $sql = "INSERT INTO `pessoa`(`pesNome`, `pesDataNascimento`, `pesSexo`, `pesTelefone`, `pesEmail`) "
        . "VALUES ('{$_POST["nome"]}','{$_POST["data"]}', '{$_POST["sexo"]}', '{$_POST["telefone"]}', '{$_POST["email"]}' )";
    $banco->query($sql);
    $banco->close();
    voltarIndex();
}

function alterarPessoa()
{
    $banco = abrirBanco();
    $sql = "UPDATE `pessoa` SET `pesNome`='{$_POST["nome"]}',`pesDataNascimento`='{$_POST["data"]}',`pesSexo`='{$_POST["sexo"]}',`pesTelefone`='{$_POST["telefone"]}',`pesEmail`='{$_POST["email"]}' WHERE pesId='{$_POST["id"]}'";
    $banco->query($sql);
    $banco->close();
    voltarIndex();
}

function excluirPessoa()
{
    $banco = abrirBanco();
    $sql = "DELETE FROM pessoa WHERE pesId='{$_POST["id"]}'";
    $banco->query($sql);
    $banco->close();
    voltarIndex();
}

function selectAllPessoa()
{
    $banco = abrirBanco();
    $sql = "SELECT * FROM pessoa ORDER BY pesNome";
    $resultado = $banco->query($sql);
    $banco->close();
    while ($row = mysqli_fetch_array($resultado)) {
        $grupo[] = $row;
    }
    return $grupo;
}

function selectIdPessoa($id)
{
    $banco = abrirBanco();
    $sql = "SELECT * FROM pessoa WHERE pesId =" . $id;
    $resultado = $banco->query($sql);
    $banco->close();
    $pessoa = mysqli_fetch_assoc($resultado);
    return $pessoa;
}


function consultaPessoa($nome)
{

        $banco = abrirBanco();
        $sql = "SELECT * FROM pessoa WHERE pesNome LIKE " . "'%$nome%'";
        if($nome != "" && $nome != null){
        $resultado = $banco->query($sql);
        $banco->close();
        $pessoa = mysqli_fetch_assoc($resultado);
        return $pessoa;
    }
}


function voltarIndex()
{
    header("Location:index.php");
}

?>