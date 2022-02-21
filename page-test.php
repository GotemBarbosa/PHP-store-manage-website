<!DOCTYPE html>
<html lang="ptBR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teste</title>

    <link rel="stylesheet" href="./styles/page-test.css">
    <link rel="stylesheet" href="./styles/global.css">

    <script type="text/javascript" src="./script/loginFunctions.js?2"></script>    




</head>

<body>
    <?php include('header.php') ?>
    <!-- Card  -->
    <a class="addProduct" href="">
        <div class="plus">
            <p>+</p>
        </div>
    </a>
    <div class="content">

        <div class="card">

            <div class="card-image">
                <Image class="Image" src="./img/Outer.jpeg" />
            </div>
            <div class="card-text">
                <h2> Nome do produto </h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. In voluptates sapiente repellendus
                    dolore
                    tenetur doloribus iusto rerum doloremque et quis. </p>
            </div>
            <div class="card-stats">
                <div class="stat">
                    <div class="value">25</div>
                    <div class="type">quantidade</div>
                </div>
                <div class="stat border">
                    <div class="value">50</div>
                    <div class="type">Peso</div>
                </div>
                <div class="stat">
                    <div class="value"><span>R$ </span>45</div>
                    <div class="type">preço</div>
                </div>
            </div>
        </div>


    </div>
    <?php include('footer.php') ?>

</body>

</html>