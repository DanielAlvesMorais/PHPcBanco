<?php
    include('includes/conexao.php');
    $id = $_GET['id'];
    $sql = "SELECT * FROM cliente WHERE idcli=$id";
    $result = mysqli_query($con,$sql);
    $row = mysqli_fetch_array($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Altera Cliente</title>
</head>
<body>
<body>
    <form action="AlteraClientesExe.php" method="post">
        <fieldset>
        <legend>Cadastro de Clientes</legend>
        <div>
            <label for="nome">Nome:<br></label>
            <input type="text" name="nome" id="nome" value="<?php echo $row['nomecli']?>">
        </div>
        <div>
            <label for="nome">Email:<br></label>
            <input type="email" name="email" id="email" value="<?php echo $row['emailcli']?>">
        </div>
        <div>
            <label for="nome">senha:<br></label>
            <input type="password" name="senha" id="senha" value="<?php echo $row['senhacli']?>">
        </div>
        <div>
            <label for="ativo">Ativo:<br></label>
            <input type="radio" name="ativo" id="ativo" value="1">
        </div>
        <input type="hidden" name="id" value="<?php echo $row['idcli']?>">
        <div>
            <label for="Cidade">Cidade:<br></label>
            <select name="cidade" id="cidade">
                <?php
                    include('include/conexao.php');
                    $sql = "SELECT * FROM cidade";
                    $result = mysqli_query($con,$sql);
                    while($row = mysqli_fetch_array($result))
                    {
                        echo "<option value='".$row['idci']."'>".$row['nomeci']."/".$row['estadoci']."</option>";
                    }
                ?>
            </select>
        </div>
        <div>
            <button type="submit">Modificar</button>
        </div>
    </fieldset>
    </form>
</body>
</html>