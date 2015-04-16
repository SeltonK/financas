<?php
	include "valida_sessao.php";
	include "conectar.php";
	// Obtem o usuario que efetuou o login
	$nome_usuario = $_SESSION["nome_usuario"];
	$nome = $_POST['nome'];
	$sexo = $_POST['sex'];
	$identidade = $_POST['rg'];
	$cpf = $_POST['cpf'];
	$email = $_POST['email'];
	$login = $_POST['login'];
	$senha = $_POST['pass'];
	mysql_query("INSERT INTO usuario values('','$login','$senha','$nome','$sexo','$identidade','$cpf','$email')");
?>