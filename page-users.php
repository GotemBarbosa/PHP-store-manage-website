<!DOCTYPE html>
<html lang="ptBR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuários</title>

    <link rel="stylesheet" href="./styles/users-style.css">
    <link rel="stylesheet" href="./styles/modal.css?<?php echo time() ?>">
    <link rel="stylesheet" href="./styles/global.css">


    <script type="text/javascript" src="./script/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="./script/usersFunctions.js?2"></script>
    <script type="text/javascript" src="./script/loginFunctions.js?2"></script>    

</head>

<body>

    <?php include('header.php') ?>

    <div class="title">
        <h1>Cadastro</h1>
    </div>

    <div class="content">
        <font class="formTitle"> Registrar-se: </font>
            
        <form id="registerForm">
            
                <label for="nome">Nome:</label>
                <input type="text"  id = "nome" name="nome" >

                <label for="userName">UserName:</label>
                <input type="text" id = "userName"  name="userName" >

                <label for="senha">Senha:</label>
                <input type="password" id = "senha"  name="senha" >

                <label for="funcao">Função:</label>
                <input type="text" id = "funcao"  name="funcao" >
            
                <input type="button" id="btnEnviar" value="inserir"/>
        </form>
        <?php include('./config/conn.php');  

        $conn ->close();
        ?>

    </div>

    <?php include('footer.php') ?>
</body>

</html>