<?php

/*
E-mail: envioemail@santistaservicos.com.br
Senha: 7b[i^2NoK{bv
Servidor saída: mail.santistaservicos.com.br
Porta: 465 / 587*/

include("class.phpmailer.php");

function email($para_email, $para_nome, $assunto, $html) {

    $mail2 = new PHPMailer;
    $mail2->IsSMTP();

    $mail2->From = "#";
    $mail2->FromName = "#";

    $mail2->Host        = "#";
    $mail2->Port        = 587;
    $mail2->SMTPAuth    = true;
    $mail2->Username    = "#";
    $mail2->Password    = "#";
  

    $mail2->AddAddress("#", "Contato");

    $mail2->Subject = $assunto;

    $mail2->AltBody = "Para ver esta mensagem, utilize um programa compatível com HTML!";

    $mail2->MsgHTML($html);

    if ($mail2->Send()){
        return "1";
    }else{
      return $mail2->ErrorInfo;
    }

    /* $mail2->MsgHTML($html);
    if ($mail2->Send()){
        header('location:agendamento.php?status=sucesso');
    }else{
      header('location:agendamento.php?status=erro');
    } */
}

    $usunome = $_POST["ntxtNome"];
    $usuemail = $_POST["ntxtEmail"];
    $usutel = $_POST["ntxtTelefone"];
    $usudata = $_POST["ntxtData"];
    $usumensagem = $_POST["ntxtMensagem"];
    
    $corpo_email = "<html><head><meta charset=\"UTF-8\"></head><body>Você tem uma nova mensagem.<br><br>Nome: ".$usunome."<br>Email: ".$usuemail."<br>Telefone: ".$usutel."<br>Data de interesse: ".$usudata."<br>Mensagem: ".$usumensagem."</body></html>";

    $controle = email("contato@santistaservicos.com.br", "Site Santista Servicos", "Mensagem do seu site 'Santista Servicos'", $corpo_email);
    if ($controle == "1"){
        header('location:agendamento.php?status=sucesso');
    }else{
      header('location:agendamento.php?status=erro');
    }
?>