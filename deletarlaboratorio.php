<?php

include_once('conexao.php');

if (isset($_POST['chavelab']) && (!empty($_POST['chavelab'])))
{
    $chavelab = addslashes($_POST['chavelab']);

    $query = "delete from tab_laboratorio where chavelab = {$chavelab};" ;

    mysqli_query($link, $query);

    header("Location: sucesso.html");

    mysqli_close($link);
}
else
{

    header("Location: erro.html");

}

?>