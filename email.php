<?php
 
 
 if(isset($_post(['email'])&& !empty($_post(['email'])){
 
 $nome = addcslashes($_post(['name']));
 $email = addcslashes($_post(['email']));
 $mensagem = addcslashes($_post(['mesege']));

 $to = "gabrielsales@uni9.edu.br";
 $subjet = "Contato - HypeTech";
 $body = "Nome: ".$nome. "\n"
         "Email: " .$email. "\n" 
         "Mensagem: " .$mensagem. "\n";
$header "From:gabrielsalesdacosta@outlook.com"."\r\n"."Reply-To:" .$email."\r\n"."X=mailer:PHP/".phpversion();

if(mail($to,$subject,$body,$header)){
echo(" Email enviado com Sucesso! ");
}else{
	echo(" O email não foi enviado! ");
}
 }

?>