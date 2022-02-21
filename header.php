<header>
    <!-- <Image class="headerImg" src="https://picsum.photos/seed/pics/1800/200?blur=2" /> -->
    <Image class="headerImg" src="./img/Banner.jpg" />
    <Nav>
        <ul>
            <li><a href="index.php" class="item">Index</a></li>
            <li><a href="page-clients.php" class="item">Clientes</a></li>
            <li><a href="page-usersAdmin.php" class="item">Usuários</a></li>
            <li><a href="page-users.php" class="item">Regristrar-se</a></li>
            <li><a href="page-test.php" class="item">Teste</a></li>



        </ul>
    </Nav>
    <div class="loginArea">
        <?php 
            session_start();
            if (!isset($_SESSION['nomeUsuario'])){
         ?>
        <form id="formLogin">
            <label for="txtLogin">Login: </label>
            <input type="text" id="txtLogin" class="inputText" name="txtLogin"/>
            <label for="txtLogin">Senha: </label>
            <input type="password" id="txtSenha" class="inputText" name="txtSenha"/>
            <input type="button" id="btnLogin" value="Login"/>
        </form>
        <?php
            }else{
                echo '<font id="logoffText"> Olá '.$_SESSION['nomeUsuario'].' </font><a href="#" id="logoff">Sair</a>';
            }
		?>
    </div>
</header>

<article>