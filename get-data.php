<?php
    include('./config/conn.php');
    
    $codigo = $_POST['codigo'];

    $SQL = 'SELECT * FROM produtos WHERE codigo ='.$codigo;
    $result = $conn->query($SQL);

    if($result->num_rows > 0){
        if($row = $result->fetch_assoc()){
            echo $row['codigo'] . "|".$row['nome']. "|" . $row['preco'] . "|" . $row['quantidade']. "|" . $row['descricao']. "|" . $row['altura'] . "|" . $row['largura'] . "|" . $row['profundidade'] . "|" . $row['peso'] . "|" . $row['fabricante'] . "|" . $row['codigoDeBarras'] . "|" . base64_encode($row['foto']);
        }
    }else{
        echo "0 resultados";
    }
