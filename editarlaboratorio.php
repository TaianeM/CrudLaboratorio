<?php

session_start();
include_once('conexao.php');
$chavelab = filter_input(INPUT_GET, 'chavelab', FILTER_SANITIZE_NUMBER_INT);
$query = "select * from tab_laboratorio where chavelab = '$chavelab';";
$laboratorio = mysqli_query($link, $query);
$row = mysqli_fetch_assoc($laboratorio);

?>

<!DOCTYPE html>
<html>

<head>
<title>Editar Laboratório</title>
<meta charset="utf-8" />
<meta name="viewport" content="width=device, initial-scale=1.0">
<link rel="stylesheet" href="style.css">

</head>

<body>
    <selection classs="content">

        <div>

            <h3>Editar servidor</h3>

            <form class="form" method="POST" action="editarlaboratoriofunction.php">

                <input class="field" name="laboratorio" placeholder="Nome do laboratório" value="<?php echo $row['laboratorio']; ?>">
                <input class="field" name="capacidade" placeholder="Capacidade máxima do laboratório" value="<?php echo $row['capacidade']; ?>">
                <input class="field" name="tipo" placeholder="Tipo de laboratório" value="<?php echo $row['tipo']; ?>">
                <input type="hidden" name="chavelab"  value="<?php echo $n = $row['chavelab']; ?>" >
                <input type="submit" value="Salvar edições">

            </form>

            <form class="form" method="POST" action="deletarlaboratorio.php">
                <input type="hidden" name="chavelab" value="<?php echo $row['chavelab']; ?>">
                <input type="submit" value="Excluir laboratório">

            </form>

        </div>

    </selection>

</body>

</html>