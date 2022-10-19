<?php
    require "CONNECT.php";
    if(isset($_GET["select"])){

    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>  
</head>
<body>
    <form action="ADICIONAR.php" method="get">
        <label for="nome">nome</label>
        <input type="text" name="NOME" id="NOME"><br>
        <label for="nascimento">nascimento</label>
        <input type="date" name="NASCIMENTO" id="NASCIMENTO"><br>
        <label for="renda">renda</label>
        <input type="number" name="RENDA" id="RENDA"><br>
        <input type="submit" value="enviar">
    </form>
    <table>
    <?php
        $resultado = $conn->query("SELECT * FROM `ALUNO`");
        if($resultado->num_rows > 0){
            while($row = $resultado->fetch_assoc()){
                echo "
                <tr>
                    <td>".$row['NOME']."</td>
                    <td>".$row['NASCIMENTO']."</td>
                    <td>".$row['RENDA']."</td>
                </tr>";
            }
        }
    ?>
    </table>
</body>
</html>
