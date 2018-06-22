//Função para validar se o formulario esta preenchido

function validar() {
    var nome = document.cadastroPessoa.nome.value;
    var data = document.cadastroPessoa.data.value;
    var sexo = document.cadastroPessoa.sexo.value;
    var telefone = document.cadastroPessoa.telefone.value;
    var email = document.cadastroPessoa.email.value;

    if (nome == "" || nome == null) {
        alert("Preencha o campo com seu nome!");
        cadastroPessoa.nome.focus();
        return false;
    } else if (data == "") {
        alert("Informe a data");
        return false;
    } else if (sexo == "" || sexo == null) {
        alert("Informe seu sexo!")
        cadastroPessoa.sexo.focus();
        return false;
    } else if (telefone == "" || telefone == null) {
        alert("Preencha o campo com o telefone!");
        cadastroPessoa.telefone.focus();
        return false;
    } else if (email == "" || email == null || email.indexOf('@') == -1 || email.indexOf('.') == -1) {
        alert("Informe um email válido!");
        cadastroPessoa.email.focus();
        return false;
    } else {
        alert("Cadastro realizado com sucesso!!");
    }

}