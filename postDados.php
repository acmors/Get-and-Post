<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Post Method</title>
</head>

<body>
    <?php

    if (isset($_POST['nome'], $_POST['email'], $_POST['phone'])) {
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];

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