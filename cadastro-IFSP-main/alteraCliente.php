<?php
    include('includes/conexao.php');
    $id = $_GET['id'];
    $sql = "SELECT * FROM cliente WHERE id=$id";
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
            <input type="text" name="nome" id="nome" value="<?php echo $row['nome']?>">
        </div>
        <div>
            <label for="nome">Email:<br></label>
            <input type="email" name="email" id="email" value="<?php echo $row['email']?>">
        </div>
        <div>
            <label for="nome">senha:<br></label>
            <input type="password" name="senha" id="senha" value="<?php echo $row['senha']?>">
        </div>
        <input type="hidden" name="id" value="<?php echo $row['id']?>">
        <div>
            <button type="submit">Modificar</button>
        </div>
    </fieldset>
    </form>
</body>
</html>