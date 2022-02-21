<?php
	session_start();
	unset($_SESSION['nomeUsuario']);
	unset($_SESSION['loginUsuario']);
	unset($_SESSION['funcaoUsuario']);
	echo "Sair";
?>