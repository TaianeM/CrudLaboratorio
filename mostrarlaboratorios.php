<html>
    <link rel="stylesheet" href="style.css">


<?php
include_once('conexao.php');

    $query = "select * from tab_laboratorio;";

    $laboratorios = mysqli_query($link, $query);

?>
    
    <table>

    <th> Laboratório </th> <th> Capacidade </th> <th> Tipo</th> <th>ID</th>

    <?php
    while($row = mysqli_fetch_assoc($laboratorios)){
       echo "<tr><td>$row[laboratorio]</td>                
       <td>$row[capacidade]</td>
       <td>$row[tipo]</td>
       <td>$row[chavelab]</td>
       <td><a href='editarlaboratorio.php?chavelab=$row[chavelab]'> Editar </a> </td> </tr>";
    }
        mysqli_close($link);
    ?>

    </table>

    <form class="form" method="POST" action="index.html">

        <input type="submit" value="Voltar">

    </form>

</html>