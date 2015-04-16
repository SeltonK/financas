<?php
	$servidor = "localhost";
	$usuario_bd = "root";
	$senha_bd = "";
	$banco = "bdfinancas";
	$con = mysql_connect($servidor , $usuario_bd , $senha_bd);
	mysql_select_db ($banco);

 ?>