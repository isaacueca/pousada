<?php

$email_check = '';
 
function isValidEmail($email){
    return eregi("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$", $email);
}
 
if(isValidEmail($_POST['email']) || isValidEmail($_POST['email'])) {
   $email_check = 'valid';
}
else {
    $email_check = 'invalid';
}

$destinatario = "isaacsou@gmail.com";

$destinatario  = 'isaacsou@gmail.com' . ', '; // note the comma
$destinatario .= 'ismalakazel@gmail.com' . ', '; // note the comma
$destinatario .= 'stelaverdeambiente@gmail.com';


$assunto = "Contato via o site da Pousada";
$nome = $_POST['nome'];
$mensagem = $_POST['mensagem'];

if ($email_check == 'valid'){
  $msg = "formulário de Contato";
  $cabecalho = "From: verdeambiente";
  $corpo .= "Nome = $nome .\n";
  $corpo .= "Email = $email .\n";
  $corpo .= "Mensagem = $mensagem .\n\n";
  $corpo .="\n\n**********************************************\n";
  $corpo .= "Este formulário foi enviado através do site da Pousada Verde Ambiente.\n";
  $corpo .= "**********************************************";
  mail($destinatario, $assunto, $corpo, $cabecalho, $msg);
  echo "Mensagem enviada com sucesso!";
}



?>