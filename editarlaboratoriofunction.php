<html>
<link rel="stylesheet" href="style.css">
</html>

<?php
include_once('conexao.php');

    $chavelab = filter_input(INPUT_POST, 'chavelab', FILTER_SANITIZE_NUMBER_INT);
    $laboratorio = filter_input(INPUT_POST, 'laboratorio', FILTER_SANITIZE_STRING);
    $capacidade = filter_input(INPUT_POST, 'capacidade', FILTER_SANITIZE_STRING);
    $tipo = filter_input(INPUT_POST, 'tipo', FILTER_SANITIZE_STRING);

    $query = "update tab_laboratorio set laboratorio='$laboratorio', capacidade='$capacidade', tipo='$tipo'  where chavelab = '$chavelab';" ;

    $conn = mysqli_query($link, $query);

    mysqli_close($link);

    header("Location: sucesso.html");

?>