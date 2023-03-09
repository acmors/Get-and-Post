<?php

require_once 'PHPMailer.php';
require_once 'SMTP.php';
require_once 'Exception.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

if (isset($_POST['submit'])) {

    $mail = new PHPMailer(true);

    try {
        $mail->SMTPDebug = SMTP::DEBUG_SERVER;
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = $_POST['enviar'];
        $mail->Password = '123';
        $mail->Port = 587;

        $mail->setFrom($_POST['enviar']);
        $mail->addAddress($_POST['destino']);

        $mail->Subject = $_POST['subject'];
        $mail->Body = $_POST['msg'];

        if ($mail->send()) {
            echo 'Email enviado com sucesso!';
        } else {
            echo 'Não foi possível enviar o email!';
        }
    } catch (Exception $e) {
        echo "Erro ao enviar mensagem: {$mail->ErrorInfo}";
    }

}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Envio de email</title>
</head>

<body>
    <div class="container">
        <div class="title">
            <h2>Envio de email!</h2>
        </div>
        <form method="post" onsubmit="return confirm('Deseja realmente enviar o email?')">

            <label for="enviar">Email que irá enviar a mensagem: </label>
            <input type="email" name="enviar" id="enviar">

            <label for="destino">Destinatário: </label>
            <input type="email" id="destino" name="destino" for="destino" placeholder="exemple@exemple.com">

            <label for="subject">Assunto: </label>
            <input type="text" id="subject" name="subject" for="subject" placeholder="ex.: Você ganhou um estágio!">

            <label for="msg">Mensagem: </label>
            <textarea name="msg" id="msg" cols="15" rows="3"></textarea>

            <input type="submit" id="submit" name="submit" value="Enviar">
        </form>
    </div>
</body>

</html>