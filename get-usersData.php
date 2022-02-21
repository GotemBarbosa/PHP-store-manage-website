<?php
    include('./config/conn.php');
    $codigo = $_POST['codigo'];

    $SQL = 'SELECT * FROM usuarios WHERE codigo ='.$codigo;
    $result = $conn->query($SQL);

    if($result->num_rows > 0){
        if($row = $result->fetch_assoc()){
            echo $row['codigo'] . "|".$row['nome']. "|" . $row['login'] . "|" . $row['funcao'] ;
        }
    }else{
        echo "0 resultados";
    }
