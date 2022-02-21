<!DOCTYPE html>
<html lang="ptBR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuarios</title>

    <link rel="stylesheet" href="./styles/usersAdmin-style.css">
    <link rel="stylesheet" href="./styles/modal.css?<?php echo time() ?>">
    <link rel="stylesheet" href="./styles/global.css">


    <script type="text/javascript" src="./script/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="./script/usersAdminFunctions.js?2"></script>
    <script type="text/javascript" src="./script/loginFunctions.js?2"></script>    

</head>

<body>

    <?php include('header.php') ?>

    <div class="title">
        <h1>Usuários</h1>
    </div>

    <div class="window" id="janela">
        <a href="#" class="fechar"> X </a>
        <h4>Usuário:</h4>
        <div class="content">
        <form id="formDados">
        <div id="inputItens">
                <input type="hidden" id="codigo" name="codigo">

                <label for="nome">Nome:</label>
                <input type="text"  id = "nome" name="nome" required>

                <label for="userName">UserName:</label>
                <input type="text" id = "userName"  name="userName" required >

                <label for="function">Função:</label>
                <input type="text" name="function" id="function" required>
            </div>
            <br><input type="button" id="btnEnviar" value="Atualizar"/>
        </form>
    </div>
    </div>
    <div id="mascara"></div>

    <div class="content">

        <?php include('./config/conn.php');  


        $sql = "SELECT * FROM usuarios";
		$result = $conn->query($sql);

		if ($result->num_rows > 0) {
	
			echo '
            <table class="styled-table">
                <thead>
                    <tr>
                        <th>Nome</td>
                        <th>UserName</td>
                        <th>Função</td>
                        <th></td>
                        <th></td>
                    </tr>
                </thead>
                <tbody>';
                

			while($linha = $result->fetch_assoc()) {
				echo '
                 <tr>
				 	<td>'.$linha["nome"].'</td>
				 	<td>'.$linha["login"].'</td>
				 	<td>'.$linha["funcao"].'</td>
				 	<td><a href="#" codigo="'. $linha['codigo'].'"class="functionUpd"><img class="functionButton" src="./assets/exchange.png" /></a></td>
				 	<td><a href="#" codigo="'. $linha['codigo'].'"class="functionDel"><img class="functionButton" src="./assets/remove.png"/></a></td>
				 </tr>';
			}

			echo '
                </tbody>
            </table>';
		}else {
		    echo "Não foram encontrados usuários cadastrados!";
		}
        
		$conn->close();
        ?>

    </div>

    <?php include('footer.php') ?>
</body>

</html>