<?php
        $codigo = $_POST["codigo"];

        include('./config/conn.php');

        $sql = "DELETE FROM clientes WHERE codigo = '$codigo' ";

        $conn->query($sql);

        $conn ->close();

        // header('Location: index.php');


?>