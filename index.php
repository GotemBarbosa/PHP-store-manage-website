<!DOCTYPE html>
<html lang="ptBR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exibindo produto</title>

    <link rel="stylesheet" href="./styles/index-style.css">
    <link rel="stylesheet" href="./styles/modal.css?<?php echo time() ?>">
    <link rel="stylesheet" href="./styles/global.css">

    
    <script type="text/javascript" src="./script/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="./script/functions.js?2"></script>    
    <script type="text/javascript" src="./script/loginFunctions.js?2"></script>    
    <script type="text/javascript" src="./script/modal.js"></script>



</head>

<body>

    <?php include('header.php') ?>

    <div class="title">
        <h1>Produtos</h1>
    </div>

    <a class="addProduct" href="#janela" rel="modal">
        <div class="plus">
            <p>+</p>
        </div>
    </a>

    <div class="window" id="janela">
        <a href="#" class="fechar"> X </a>
        <h4>Insira Produtos:</h4>
        <div class="content">
        <form id="formDados">
            <div id="inputItens">
                <input type="hidden" id="codigo" name="codigo">
                <p>Nome:</p>
                <input type="text"  id = "nome" name="nome" required value="produtoA">

                <p>Preço:</p>
                <input type="text" id = "preco"  name="preco" required value="15">

                <p>Quantidade:</p>
                <input type="number" id = "quantidade"  name="quantidade" required value="35">

                <p>Descrição:</p>
                <input type="text" id = "descricao"  name="descricao" required resisable
                    value="Esse é o produto mais legal da empresa :)">

                <p>Altura:(m)</p>
                <input type="number" id = "altura"  name="altura" required value="5">

                <p>Largura:(m)</p>
                <input type="number" id = "largura"  name="largura" required value="1">

                <p>Profundidade:(m)</p>
                <input type="number" id = "profundidade"  name="profundidade" required value="1">

                <p>Peso:(Kg)</p>
                <input type="text" id = "peso"  name="peso" required value="1.5">

                <p>Fabricante:</p>
                <input type="text" id = "fabricante"  name="fabricante" required value="Fabricante A">

                <p>Codigo de barras:</p>
                <input type="text" id = "codigoDeBarras"  name="codigoDeBarras" required value="1234567890123">

                <p>Foto:</p>
                <input type="file" name="fileFoto" id="fileFoto" required>

			    <input type="hidden" name="hdnFoto" id="hdnFoto"/>
            </div>
            <img src="data:image/jpeg;base64,R0lGODlhAQABAAAAACwAAAAAAQABAAA=" id="fotoProduto"/>
            <br><input type="button" id="btnEnviar" value="inserir"/>
        </form>
    </div>
    </div>
    <div id="mascara"></div>

    <div class="content">

        <?php include('./config/conn.php');  
            $SQL = "SELECT * FROM produtos";
        
            $result = $conn->query($SQL);

            if($result->num_rows > 0){
                while ($linha = $result->fetch_assoc()) {
                    echo '
                    <div class="card">
                        <div class="card-functions">
                            <a href="#" codigo="'. $linha['codigo'].'"class="functionUpd"><Img src="./assets/exchange.png" /></a>
                            <a href="#" codigo="'. $linha['codigo'].'"class="functionDel"><Img src="./assets/remove.png" /></a>
                        </div>
                        <div class="card-image">
                            <Image class="Image" src ="data:image/jpeg;base64,'.base64_encode($linha['foto']).'"/>
                        </div>
                        <div class="card-text">
                            <h2>'. $linha['nome'].' </h2>
                            <p>'. $linha['descricao'].'</p>
                        </div>
                        <div class="card-stats">
                            <div class="stat">
                                <div class="value">'. $linha['quantidade'].'</div>
                                <div class="type">quantidade</div>
                            </div>
                            <div class="stat border">
                                <div class="value">'. $linha['peso'].'</div>
                                <div class="type">Peso(Kg)</div>
                            </div>
                            <div class="stat">
                                <div class="value">'. $linha['preco'].'</div>
                                <div class="type">preço(R$)</div>
                            </div>
                        </div>
                    </div>
                    
                    ';
                };
            }else{
            echo "Não há resultados";
        };
        $conn ->close();
        ?>

    </div>

    <?php include('footer.php') ?>
</body>

</html>