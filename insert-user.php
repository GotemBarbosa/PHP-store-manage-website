<?php
    include('./config/conn.php');

   
    $nome = $_POST['nome'];
    $username = $_POST['userName'];
    $senha = $_POST['senha'];
    $funcao = $_POST['funcao'];
   

    $SQL = "INSERT INTO usuarios VALUES(null, '$nome','$username', '$senha', '$funcao')";

    $conn->query($SQL);

    $conn->close();
    echo "inserido com sucesso";
?>