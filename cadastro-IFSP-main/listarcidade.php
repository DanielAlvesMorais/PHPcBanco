<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        include('includes/conexao.php');
        $sql = "SELECT * FROM cidade";
        // Executa a consulta
        $result = mysqli_query($con, $sql);
    ?>
    <h1><center>Consulta de Cidades</center></h1>
    <table align="center" border="1" width="50%">
        <tr>
            <th>Código</th>
            <th>Nome</th>
            <th>Estado</th>
            <th>Alterar</th>
            <th>Deletar</th>
        </tr>
        <?php
            while($row = mysqli_fetch_array($result)){
                echo "<tr>";
                echo "<td>".$row['idci']."</td>";
                echo "<td>".$row['nomeci']."</td>";
                echo "<td>".$row['estadoci']."</td>";
                echo "<td><a href ='alteraCidade.php?id=".$row['idci']."'>Alterar</a></td>";
                echo "<td><a href ='deletaCidade.php?id=".$row['idci']."'>Deletar</a></td>";
                echo "</tr>";
            }
        ?>
    </table>
    <p><center><a href="index.html">Voltar</a></center></p>
</body>
</html>