<?php
include_once('conexao.php');
if (isset($_POST['siape']) && (!empty($_POST['siape'])))
{

    $nomeservidor = addslashes($_POST['nomeservidor']);
    $email = addslashes($_POST['email']);
    $siape = addslashes($_POST['siape']);
    
    $query = "INSERT INTO tab_servidor(nomeservidor, email, siape) VALUES ('$nomeservidor', '$email', '$siape');" ;

    mysqli_query($link, $query);

    header("Location: sucesso.html");

    mysqli_close($link);
}
else
{

    header("Location: erro.html");

}

?>