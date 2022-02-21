<?php
    include('./config/conn.php');

    $foto = addslashes(file_get_contents($_POST['hdnFoto'])); //primeiro transforma em texto e depois o addslash transforma em blob

    $nome = $_POST['nome'];
    $endereco = $_POST['endereco'];

    $SQL = "INSERT INTO clientes VALUES(null, '$nome','$endereco','$foto')";

    $conn->query($SQL);

    $conn->close();
    echo "inserido com sucesso";
?>