<?php

$codigo = $_POST['codigo'];
$newNome = $_POST['nome'];
$newUserName = $_POST['userName'];
$newFunction = $_POST['function'];

include('./config/conn.php');


$SQL = "UPDATE usuarios SET nome= '$newNome', login= '$newUserName', funcao='$newFunction' WHERE codigo = '$codigo' ";

if($conn->query($SQL)){
    echo "alterado com sucesso";
    
}else{
    echo $conn->error;
}
$conn ->close();

// header("Location: index.php");


?>