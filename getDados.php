<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Get Method</title>
</head>

<body>
    <?php

    if (isset($_GET['nome'], $_GET['email'], $_GET['phone'])) {
        $nome = $_GET['nome'];
        $email = $_GET['email'];
        $phone = $_GET['phone'];

        if ($nome == '' || $email == '' || $phone == '') {
            echo '<div class="container"><h2>Por favor preencha todos os dados!</h2></div>';
        } else {
            echo '<div class="container">';
            echo '<h2>Dados recebidos com sucesso!</h2>';
            echo '<ul>';
            echo '<li>Nome: ' . $nome.'</li>';
            echo '<li>Email: ' . $email.'</li>';
            echo '<li>Celular: ' . $phone.'</li>';
            echo '</ul>';
            echo '</div>';
        }
    }

    ?>

</body>

</html>