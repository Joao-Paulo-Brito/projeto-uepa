<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="../css/admin.css">
    <link rel="stylesheet" href="../css/bootstrap.css">
</head>
<body>
<?php
    include 'conexao.php';

    // Consulta SQL
    $sql = "SELECT * FROM contato ORDER BY id_usuario DESC";

    // Executar a consulta
    $result = $conn->query($sql);
?>
<table class="table">
    <thead>
        <tr>
            <th>email</th>
            <th>assunto</th>
            <th>mensagem</th>
        </tr>
    </thead>
    <tbody>
        <?php 
            while($user_data = mysqli_fetch_assoc($result)){
                echo"<tr>";
                echo"<td>".$user_data['email']."</td>";
                echo"<td>".$user_data['assunto']."</td>";
                echo"<td>".$user_data['mensagem']."</td>";
                echo"</td>";
            }
        ?>
    </tbody>
</table>
</body>
</html>
