<?php
// Conexão com o banco de dados
$servername = "localhost";
$dbusername = "root";
$senhadb = "";
$dbname = "faleconosco";

// Criar conexão
$conn = new mysqli($servername, $dbusername, $senhadb, $dbname);

// Verifica se a conexão foi estabelecida com sucesso
if ($conn->connect_errno) {
    echo "";
}else{
    echo "";
}
?>