<?php
require_once("mostra-alerta.php");
require_once("PHPMailerAutoload.php");

$nome = $_POST["nome"];
$email = $_POST["email"];
$mensagem = $_POST["mensagem"];

$mail = new PHPMailer();
$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->Port = 587;
$mail->SMTPSecure = 'tls';
$mail->SMTPAuth = true;
$mail->Username = "xxxxxxxxxxcassio@gmail.com";
$mail->Password = "XXXXXXXXXX";
//$mail->SMTPDebug = 1;

$mail->setFrom("testephpcassio@gmail.com", "Loja");
$mail->addAddress("testephpcassio@gmail.com");
$mail->Subject = "Email de contato da loja";
$mail->msgHTML("<html>de: {$nome}<br/>email: {$email}<br/>mensagem: {$mensagem}</html>");
$mail->AltBody = "de: {$nome}\nemail:{$email}\nmensagem: {$mensagem}";
$mail->SMTPOptions = array(
'ssl' => array(
    'verify_peer' => false,
    'verify_peer_name' => false,
    'allow_self_signed' => true
));

if($mail->send()) {
    $_SESSION["success"] = "Mensagem enviada com sucesso";    
    header("Location: index.php");
} else {
    $_SESSION["danger"] = "Erro ao enviar mensagem " . $mail->ErrorInfo;    
    header("Location: contato.php");
}
die();