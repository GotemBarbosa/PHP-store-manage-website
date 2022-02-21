<?php
    include('./config/conn.php');
    $codigo = $_POST['codigo'];

    $SQL = 'SELECT * FROM clientes WHERE codigo ='.$codigo;
    $result = $conn->query($SQL);

    if($result->num_rows > 0){
        if($row = $result->fetch_assoc()){
            echo $row['codigo'] . "|".$row['nome']. "|" . $row['endereco'] . "|" . base64_encode($row['foto']);
        }
    }else{
        echo "0 resultados";
    }
