<?php
    include('includes/conexao.php');
    $id = $_GET['id'];
    $sql = "SELECT * FROM cidade WHERE idci=$id";
    $result = mysqli_query($con,$sql);
    $row = mysqli_fetch_array($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Altera Cidade</title>
</head>
<body>
<body>
    <form action="AlteraCidadeExe.php" method="post">
        <fieldset>
        <legend>Cadastro de Cidades</legend>
        <div>
            <label for="nome">Nome:<br></label>
            <input type="text" name="nome" id="nome" value="<?php echo $row['nomeci']?>">
        </div>
        <div>
            <label for="nome">Estado:<br></label>
            <select name="estado" id="estado">
                <option value="AC" 
                    <?php echo $row['estadoci'] == "AC" ? "selected" : ""?> >Acre</option>
                <option value="AL"
                    <?php echo $row['estadoci'] == "AL" ? "selected" : ""?> >Alagoas</option>
                <option value="AP"
                    <?php echo $row['estadoci'] == "AP" ? "selected" : ""?> >Amapá</option>
                <option value="AM"
                    <?php echo $row['estadoci'] == "AM" ? "selected" : ""?> >Amazonas</option>
                <option value="BA"
                    <?php echo $row['estadoci'] == "BA" ? "selected" : ""?> >Bahia</option>
                <option value="CE"
                    <?php echo $row['estadoci'] == "CE" ? "selected" : ""?> >Ceará</option>
                <option value="DF"
                    <?php echo $row['estadoci'] == "DF" ? "selected" : ""?> >Distrito Federal</option>
                <option value="ES"
                    <?php echo $row['estadoci'] == "ES" ? "selected" : ""?> >Espírito Santo</option>
                <option value="GO"
                    <?php echo $row['estadoci'] == "GO" ? "selected" : ""?> >Goiás</option>
                <option value="MA"
                    <?php echo $row['estadoci'] == "MA" ? "selected" : ""?> >Maranhão</option>
                <option value="MT"
                    <?php echo $row['estadoci'] == "MT" ? "selected" : ""?> >Mato Grosso</option>
                <option value="MS"
                    <?php echo $row['estadoci'] == "MS" ? "selected" : ""?> >Mato Grosso do Sul</option>
                <option value="MG"
                    <?php echo $row['estadoci'] == "MG" ? "selected" : ""?> >Minas Gerais</option>
                <option value="PA"
                    <?php echo $row['estadoci'] == "PA" ? "selected" : ""?> >Pará</option>
                <option value="PB"
                    <?php echo $row['estadoci'] == "PB" ? "selected" : ""?> >Paraíba</option>
                <option value="PR"
                    <?php echo $row['estadoci'] == "PR" ? "selected" : ""?> >Paraná</option>
                <option value="PE"
                    <?php echo $row['estadoci'] == "PE" ? "selected" : ""?> >Pernambuco</option>
                <option value="PI"
                    <?php echo $row['estadoci'] == "PI" ? "selected" : ""?> >Piauí</option>
                <option value="RJ"
                    <?php echo $row['estadoci'] == "RJ" ? "selected" : ""?> >Rio de Janeiro</option>
                <option value="RN"
                    <?php echo $row['estadoci'] == "RN" ? "selected" : ""?> >Rio Grande do Norte</option>
                <option value="RS"
                    <?php echo $row['estadoci'] == "RS" ? "selected" : ""?> >Rio Grande do Sul</option>
                <option value="RO"
                    <?php echo $row['estadoci'] == "RO" ? "selected" : ""?> >Rondônia</option>
                <option value="RR"
                    <?php echo $row['estadoci'] == "RR" ? "selected" : ""?> >Roraima</option>
                <option value="SC"
                    <?php echo $row['estadoci'] == "SC" ? "selected" : ""?> >Santa Catarina</option>
                <option value="SP"
                    <?php echo $row['estadoci'] == "SP" ? "selected" : ""?> >São Paulo</option>
                <option value="SE"
                    <?php echo $row['estadoci'] == "SE" ? "selected" : ""?> >Sergipe</option>
                <option value="TO"
                    <?php echo $row['estadoci'] == "TO" ? "selected" : ""?> >Tocantins</option>
            </select>
            <input type="hidden" name="id" value="<?php echo $row['idci']?>">
        </div>
        <div>
            <button type="submit">Modificar</button>
        </div>
    </fieldset>
    </form>
</body>
</html>