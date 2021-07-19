function validar() {
    if (document.agendamento.txtNome.value == "" || document.agendamento.txtNome.value.length < 5 || document.agendamento.txtNome.value.indexOf(" ") == -1) {
        alert("Insira, pelo menos, nome e sobrenome.");
        document.agendamento.ntxtNome.focus();
        return false;
    }

    if (document.agendamento.ntxtEmail.value == "" || document.agendamento.ntxtEmail.value.indexOf('@') == -1 || document.agendamento.ntxtEmail.value.indexOf('.com') == -1) {
        alert("Insira um e-mail válido.");
        document.agendamento.ntxtEmail.focus();
        return false;
    }

    if (document.agendamento.ntxtTelefone.value == "" || document.agendamento.ntxtTelefone.value.length <= 13) {
        alert("Insira um telefone válido.");
        document.agendamento.ntxtTelefone.focus();
        return false;
    }

    if (document.agendamento.ntxtMensagem.value == "") {
        alert("Campo mensagem em branco.");
        document.agendamento.ntxtMensagem.focus();
        return false;
    }

    if (document.getElementById("txtData").value == '' || document.getElementById("txtData").value < 8) {
        alert("Erro no campo Data.");
        return false;
    }

    var dataForm = document.getElementById("txtData").value;

    var MyDate = new Date();
    var MyDateString;

    MyDate.setDate(MyDate.getDate());
    MyDateString = ('0' + MyDate.getDate()).slice(-2) + '/'
        + ('0' + (MyDate.getMonth() + 1)).slice(-2) + '/'
        + MyDate.getFullYear();

    if (dataForm <= MyDateString) {
        alert("Insira uma data posterior ao dia de hoje.");
        /* alert(dataForm);
        alert(MyDateString); */
        return false;
    }

    /* var usunome = document.getElementById("txtNome").value;
    var usuemail = document.getElementById("txtEmail").value;
    var usutel = document.getElementById("txtTelefone").value;
    var usudata = document.getElementById("txtData").value;
    var usumensagem = document.getElementById("txtMensagem").value;

    $corpo_email = "Você tem um novo agendamento.<br><br>Nome: "+usunome+"<br>Email: "+usuemail+"<br>Telefone: "+usutel+"<br>Data: "+usudata+"<br>Mensagem: "+usumensagem;

    $controle = email("contato@santistaservicos.com.br", "Site Santista Servicos", "Nova mensagem de agendamento", $corpo_email);
    if ($controle == "1"){
        header('location:agendamento.php?status=sucesso');
    }else{
        header('location:agendamento.php?status=erro');
    } */

    return true;

}