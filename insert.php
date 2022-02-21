<?php
    include('./config/conn.php');

    $foto = addslashes(file_get_contents($_POST['hdnFoto'])); //primeiro transforma em texto e depois o addslash transforma em blob

    $nome = $_POST['nome'];
    $preco = $_POST['preco'];
    $quantidade = $_POST['quantidade'];
    $descricao = $_POST['descricao'];
    $altura = $_POST['altura'];
    $largura = $_POST['largura'];
    $profundidade = $_POST['profundidade'];
    $peso = $_POST['peso'];
    $fabricante = $_POST['fabricante'];
    $codigoDeBarras = $_POST['codigoDeBarras'];

    $SQL = "INSERT INTO produtos VALUES(null, '$nome','$preco', '$quantidade', '$descricao', '$altura', '$largura', '$profundidade', '$peso', '$fabricante', '$codigoDeBarras', '$foto')";

    $conn->query($SQL);

    $conn->close();
    echo "inserido com sucesso";
?>