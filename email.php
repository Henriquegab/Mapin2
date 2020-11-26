<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
include("head.html");

 require_once 'vendor/autoload.php'; //chama a classe de onde você a colocou.
function EnviarEmail($email, $senha){
$mail = new PHPMailer(); // instancia a classe PHPMailer

$mail->IsSMTP();
$mail->SMTPDebug = 1;

//configuração do gmail
$mail->Port = '465'; //porta usada pelo gmail.
$mail->Host = 'smtp.gmail.com'; 
$mail->IsHTML(true); 
$mail->Mailer = 'smtp'; 
$mail->SMTPSecure = 'ssl';

//configuração do usuário do gmail
$mail->SMTPAuth = true; 
$mail->Username = 'mapinsuportetecnico@gmail.com'; // usuario gmail.   
$mail->Password = 'mapin12345'; // senha do email.

$mail->SingleTo = true; 

// configuração do email a ver enviado.
$mail->From = "mapinsuportetecnico@gmail.com"; #Mensagem de email, pode vim por uma variavel.
$mail->FromName = "Map-in"; #Nome do remetente.

$mail->addAddress("$email"); // email do destinatario.

$mail->Subject = "Senha Alterada"; #Aqui vai o assunto do email, pode vim atraves de variavel.
$mail->Body = "Sua nova senha é :$senha";#Aqui vai a mensagem, que tambem pode vim por variavel.

  if(!$mail->send()) {
        #echo "Mailer Error: " . $mail->ErrorInfo;
  	return 0;
    } 
    else {
        #echo "Message has been sent successfully";
        return 1;
    }
}
?>