<?php
// Recebendo dados do formulário
$name = $_POST['txtNome'];
$email = $_POST['txtEmail'];
$phone = $_POST['txtTelefone'];
$date = $_POST['txtData'];
$message = $_POST['txtMensagem'];

$headers = "Content-Type: text/html; charset=utf-8\r\n";
$headers .= "From: $email\r\n";
$headers .= "Reply-To: $email\r\n";

// Dados que serão enviados
$corpo = "Formulário da página de contato <br>";
$corpo .= "Nome: " . $name . " <br>";
$corpo .= "Telefone: " . $phone . " <br>";
$corpo .= "Email: " . $email . " <br>";
$corpo .= "Data: " . $date . " <br>";
$corpo .= "Mensagem: " . $message . " <br>";

// Email que receberá a mensagem (Não se esqueça de substituir)
$email_to = 'contato@santistaservicos.com.br';

// Enviando email
$status = mail($email_to, mb_encode_mimeheader($message, "utf-8"), $corpo, $headers);

if ($status):
  // Enviada com sucesso
  header('location:agendamento.php?status=sucesso');
else:
  // Se der erro
  header('location:agendamento.php?status=erro');
endif;