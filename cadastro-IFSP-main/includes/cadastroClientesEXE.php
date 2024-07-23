<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>forms</title>
</head>
<body>
    <form action="../CadastroCliente.php" method="post">
        <fieldset>
        <legend>Cadastro de Clientes</legend>
        <div>
            <label for="nome">Nome:<br></label>
            <input type="text" name="nome" id="nome">
        </div>
        <div>
            <label for="nome">Email:<br></label>
            <input type="email" name="email" id="email">
        </div>
        <div>
            <label for="nome">Senha:<br></label>
            <input type="password" name="senha" id="senha">
        </div>
        <div>
            <label for="ativo">Ativo:<br></label>
            <input type="radio" name="ativo" id="ativo" value="1">
        </div>
        <div>
            <label for="Cidade">Cidade:<br></label>
            <select name="cidade" id="cidade">
                <?php
                    include('conexao.php');
                    $sql = "SELECT * FROM cidade";
                    $result = mysqli_query($con,$sql);
                    while($row = mysqli_fetch_array($result))
                    {
                        echo "<option value='".$row['idci']."'>".$row['nomeci']."/".$row['estadoci']."</option>";
                    }
                ?>
            </select>
        </div>
        <br>
        <div>
            <button type="submit">Cadastrar</button>
        </div>
    </fieldset>
    </form>
</body>
</html>