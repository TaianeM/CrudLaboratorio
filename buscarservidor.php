<html>
    <link rel="stylesheet" href="style.css">


<?php
include_once('conexao.php');


    $nome = addslashes($_POST['nome']);

    $query = "SELECT * FROM tab_servidor WHERE nomeservidor LIKE '%$nome%';" ;

    ///$query = "select * from tab_servidor;";

    $servidores = mysqli_query($link, $query);

?>
    
    <table>

    <th> Nome </th> <th> SIAPE </th> <th> E-mail</th>

    <?php
    while($row = mysqli_fetch_assoc($servidores)){
       echo "<tr><td>$row[nomeservidor]</td>                
       <td>$row[siape]</td>
       <td>$row[email]</td>
       <td><a href='editarservidor.php?siape=$row[siape]'> Editar </a> </td> </tr>";
    }
        mysqli_close($link);
    ?>

    </table>

    <form class="form" method="POST" action="busscarservidor.html">

        <input type="submit" value="Voltar">

    </form>

</html>