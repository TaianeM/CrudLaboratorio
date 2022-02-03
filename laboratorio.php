<?php
include_once('conexao.php');
if (isset($_POST['laboratorio']) && (!empty($_POST['laboratorio'])))
{

    $laboratorio = addslashes($_POST['laboratorio']);
    $capacidade = addslashes($_POST['capacidade']);
    $tipo = addslashes($_POST['tipo']);
    
    $query = "INSERT INTO tab_laboratorio (laboratorio, capacidade, tipo) VALUES ('$laboratorio', '$capacidade', '$tipo');" ;

    mysqli_query($link, $query);

    header("Location: sucesso.html");
    
    mysqli_close($link);
}
else
{

    header("Location: erro.html");

}

?>