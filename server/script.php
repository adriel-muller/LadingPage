<?php 

$email = $_POST['email'];

$file = fopen("./data/dados.txt", "a+");
fwrite($file, $email."\n");

fclose($file);
header("Location: ../index.php");

$emailRemetente = "adriel-trabalhos@trabalhosadriel.gq";
$mensagem = "O E-Book esta em desenvolvimento, assim que estiver pronto enviaremos um link. Previsão: 31/02/2034";
$assunto = "E-Book Coders";

$headers  = "From:$emailRemetente \n";
$headers .= "Subject: $mensagem \n"; 
$headers .= "X-Priority: 3\n";
$headers .= "Return-Path: $emailRemetente\n"; 
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset= UTF-8\n";

mail($email, $assunto, $mensagem, $headers);






?>
