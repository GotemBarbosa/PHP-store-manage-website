<!DOCTYPE html>
<html lang="ptBR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clientes</title>

    <link rel="stylesheet" href="./styles/clients-style.css">
    <link rel="stylesheet" href="./styles/modal.css?<?php echo time() ?>">
    <link rel="stylesheet" href="./styles/global.css">


    <script type="text/javascript" src="./script/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="./script/clientsFunctions.js?2"></script>
    <script type="text/javascript" src="./script/loginFunctions.js?2"></script>    

</head>

<body>

    <?php include('header.php') ?>

    <div class="title">
        <h1>Clientes</h1>
    </div>

    <a class="addUsers" href="#janela" rel="modal">
        <div class="plus">
            <p>+</p>
        </div>
    </a>

    <div class="window" id="janela">
        <a href="#" class="fechar"> X </a>
        <h4>Insira o cliente:</h4>
        <div class="content">
        <form id="formDados">
        <div id="inputItens">
                <input type="hidden" id="codigo" name="codigo">

                <label for="nome">Nome:</label>
                <input type="text"  id = "nome" name="nome" required>

                <label for="endereco">endereco:</label>
                <input type="text" id = "endereco"  name="endereco" required >

                <label for="fileFoto">Foto:</label>
                <input type="file" name="fileFoto" id="fileFoto" required>

			    <input type="hidden" name="hdnFoto" id="hdnFoto"/>
            </div>
            <img src="data:image/jpeg;base64,R0lGODlhAQABAAAAACwAAAAAAQABAAA=" id="fotoCliente"/>
            <br><input type="button" id="btnEnviar" value="inserir"/>
        </form>
    </div>
    </div>
    <div id="mascara"></div>

    <div class="content">

        <?php include('./config/conn.php');  


        $sql = "SELECT * FROM Clientes";
		$result = $conn->query($sql);

		if ($result->num_rows > 0) {
	
			echo '
            <table class="styled-table">
                <thead>
                    <tr>
                        <th>Código</td>
                        <th>Nome</td>
                        <th>Endereço</td>
                        <th></td>
                        <th></td>
                        <th></td>
                    </tr>
                </thead>
                <tbody>';
                

			while($linha = $result->fetch_assoc()) {
				echo '
                 <tr>
				 	<td>'.$linha["codigo"].'</td>
				 	<td>'.$linha["nome"].'</td>
				 	<td>'.$linha["endereco"].'</td>
                    <td><img class="clientImg" src="data:image/jpeg;base64,'.base64_encode($linha['foto']).'" /></td>
				 	<td><a href="#" codigo="'. $linha['codigo'].'"class="functionUpd"><img class="functionButton" src="./assets/exchange.png" /></a></td>
				 	<td><a href="#" codigo="'. $linha['codigo'].'"class="functionDel"><img class="functionButton" src="./assets/remove.png"/></a></td>
				 </tr>';
			}

			echo '
                </tbody>
            </table>';
		}else {
		    echo "Não foram encontrados clientes cadastrados!";
		}
        
		$conn->close();
        ?>

    </div>

    <?php include('footer.php') ?>
</body>

</html>