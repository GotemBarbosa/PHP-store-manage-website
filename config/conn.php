<?php
//conexão

//localhost:3307
$servidor = "localhost:3307";
$usuario = "root";
$senha = "";
$banco = "sistemaloja";

$conn = new mysqli($servidor, $usuario, $senha, $banco);

if($conn->connect_error){
    die("Erro de conexão: ". $conn->connect_error );
}
//é necessário fechar a conn depois
    //$conn ->close();


?>