function validacao() {
    if(document.agendamento.ntxtNome.value == "" || document.agendamento.ntxtNome.value.length < 5 || document.agendamento.ntxtNome.value.indexOf(" ") == -1){
        alert("Insira, pelo menos, nome e sobrenome.");
        document.agendamento.ntxtNome.focus();
        return false;
    }

    if (document.agendamento.ntxtEmail.value == "" || 
    document.agendamento.ntxtEmail.value.indexOf('@') == -1 || document.agendamento.ntxtEmail.value.indexOf('.com') == -1) {
        alert("Insira um e-mail válido.");
        document.agendamento.ntxtEmail.focus();
        return false;
    }

    if (document.agendamento.ntxtTelefone.value == "" || document.agendamento.ntxtTelefone.value.length < 10) {
        alert("Insira um telefone válido.");
        document.agendamento.ntxtTelefone.focus();
        return false;
    }

    if (document.agendamento.ntxtData.value == "" || document.agendamento.ntxtData.value.length < 8) {
        alert("Insira uma data válida.");
        document.agendamento.ntxtData.focus();
        return false;
    }

    if (document.agendamento.ntxtMensagem.value == "") {
        alert("Campo mensagem em branco.");
        document.agendamento.ntxtMensagem.focus();
        return false;
    }

    return true;

}