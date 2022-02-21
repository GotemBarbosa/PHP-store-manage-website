<?php

$codigo = $_POST['codigo'];
$newNome = $_POST['nome'];
$newPreco = $_POST['preco'];
$newQuantidade = $_POST['quantidade'];
$newDescricao = $_POST['descricao'];
$newAltura = $_POST['altura'];
$newLargura = $_POST['largura'];
$newProfundidade = $_POST['profundidade'];
$newPeso = $_POST['peso'];
$newFabricante = $_POST['fabricante'];
$newCodigoDeBarras = $_POST['codigoDeBarras'];


$newFoto = addslashes(file_get_contents($_POST['hdnFoto']));

include('./config/conn.php');


$SQL = "UPDATE produtos SET nome= '$newNome', preco= '$newPreco', quantidade= '$newQuantidade', descricao= '$newDescricao', altura= '$newAltura', largura= '$newLargura', profundidade= '$newProfundidade', peso= '$newPeso', fabricante= '$newFabricante', codigoDeBarras= '$newCodigoDeBarras', foto='$newFoto' WHERE codigo = '$codigo' ";

if($conn->query($SQL)){
    //echo "alterado com sucesso";
    echo $SQL;
}else{
    echo $conn->error;
}
$conn ->close();


?>