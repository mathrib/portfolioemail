<?php

if(isset($_POST['email']) && !empty($_POST['email'])){
$nome = addcslashes($_POST['name']);
$email = addcslashes($_POST['email']);
$mensagem = addcslashes($_POST['message']);


$to = "matheusribeirofon20@gmail.com" 
$subject = "Contato porfólio"
$body = "Nome ".$nome. "\n"
        "Email ".$email. "\n"
        "Mensagem ".$mensagem;

$header = "From:matheusribeirofon20@gmail.com"."\r\n". "Reply-To:".$email."\r\n"."X=Mailer:PHP/".phpversion()

if(mail($to, $subject, $body, $header)){
    echo("Email enviado");

}else{
    echo("Houve um erro");
}


}

?>