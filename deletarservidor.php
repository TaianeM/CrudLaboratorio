<?php

include_once('conexao.php');

if (isset($_POST['siape']) && (!empty($_POST['siape'])))
{
    $siape = addslashes($_POST['siape']);

    $query = "delete from tab_servidor where siape = {$siape}" ;

    mysqli_query($link, $query);

    header("Location: sucesso.html");

    mysqli_close($link);
}
else
{

    header("Location: erro.html");

}

?>