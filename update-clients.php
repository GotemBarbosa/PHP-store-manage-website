<?php

$codigo = $_POST['codigo'];
$newNome = $_POST['nome'];
$newEndereco = $_POST['endereco'];
$newFoto = addslashes(file_get_contents($_POST['hdnFoto']));

include('./config/conn.php');


$SQL = "UPDATE clientes SET nome= '$newNome', endereco= '$newEndereco', foto='$newFoto' WHERE codigo = '$codigo' ";

if($conn->query($SQL)){
    echo "alterado com sucesso";
    
}else{
    echo $conn->error;
}
$conn ->close();

// header("Location: index.php");


?>