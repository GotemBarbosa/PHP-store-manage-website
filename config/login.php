<?php
	session_start();
	include('conn.php');

	$sql = "SELECT * FROM Usuarios WHERE login='".$_POST['txtLogin']."' AND senha='".$_POST['txtSenha']."'";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {	
	    if($row = $result->fetch_assoc()) {
	    	echo 'Logado com Sucesso!';
	    	$_SESSION['nomeUsuario'] = $row['nome'];
	    	$_SESSION['loginUsuario'] = $row['login'];
	    	$_SESSION['funcaoUsuario'] = $row['funcao'];
		}
	}else{
		echo 'Login Inválido!';
	}
?>