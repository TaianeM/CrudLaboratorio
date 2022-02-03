<html>
<link rel="stylesheet" href="style.css">
</html>

<?php
include_once('conexao.php');

    $siape = filter_input(INPUT_POST, 'siape', FILTER_SANITIZE_NUMBER_INT);
    $nomeservidor = filter_input(INPUT_POST, 'nomeservidor', FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);

    $query = "update tab_servidor set nomeservidor='$nomeservidor', email='$email'  where siape = '$siape';" ;

    $conn = mysqli_query($link, $query);

    mysqli_close($link);

    header("Location: sucesso.html");

?>