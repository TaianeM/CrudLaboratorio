<?php

session_start();
include_once('conexao.php');
$siape = filter_input(INPUT_GET, 'siape', FILTER_SANITIZE_NUMBER_INT);
$query = "select * from tab_servidor where siape = '$siape';";
$servidor = mysqli_query($link, $query);
$row = mysqli_fetch_assoc($servidor);

?>

<!DOCTYPE html>
<html>

<head>
<title>Editar Servidor</title>
<meta charset="utf-8" />
<meta name="viewport" content="width=device, initial-scale=1.0">
<link rel="stylesheet" href="style.css">

</head>

<body>
    <selection classs="content">

        <div>

            <h3>Editar servidor</h3>

            <form class="form" method="POST" action="editarservidorfunction.php">

                <input class="field" name="nomeservidor" placeholder="Nome completo do servidor" value="<?php echo $n = $row['nomeservidor']; ?>">
                <input class="field" name="email" placeholder="E-mail de contato" value="<?php echo $n = $row['email']; ?>">
                <input type="hidden" name="siape" placeholder="Número SIAPE" value="<?php echo $n = $row['siape']; ?>" >
                <input type="submit" value="Salvar edições">

            </form>

            <form class="form" method="POST" action="deletarservidor.php">
                <input type="hidden" name="siape" placeholder="Número SIAPE" value="<?php echo $n = $row['siape']; ?>">
                <input type="submit" value="Excluir servidor">

            </form>

        </div>

    </selection>

</body>

</html>