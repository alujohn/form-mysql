<?php
    // if(isset($_POST['submit']))
    // {

    //     print_r($_POST['nome']);
    //     print_r('<br>');
    //     print_r($_POST['email']);
    // }

    include_once('config.php');

    $nome = $_POST['nome'];
    $email = $_POST['email'];

    $result = mysqli_query($conexao, "INSERT INTO usuarios(nome, email) VALUES ('$nome', '$email')");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            text-align: center;
        }
    </style>
</head>
<body>
    <form action="index.php" method="POST">
        <h1>formulario teste</h1>
        <label for="nome">nome:</label>
        <input type="text" name="nome" id="nome" required>
        <br><br>

        <label for="email">email:</label>
        <input type="text" name="email" id="email" required>
        <br><br>

        <input type="submit" name="submit" id="submit">
    </form>
</body>
</html>