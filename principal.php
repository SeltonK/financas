<?php
	include "valida_sessao.php";
	include "conectar.php";
	$nome_usuario = $_SESSION["nome_usuario"];
	$perfil_usuario = $_SESSION["perfil_usuario"];
	$resultado = mysql_query("SELECT * FROM usuario WHERE login= '$nome_usuario'");
	$sexo = mysql_result($resultado ,0,"sexo");
	$nome = mysql_result($resultado ,0,"nome");
	mysql_close($con);
?>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="css/foundation.css">
		<script type="text/javascript" src="https://www.google.com/jsapi?autoload={'modules':[{'name':'visualization','version':'1.1','packages':['bar']}]}"></script>
		<script type="text/javascript" src="js/chart.js"></script>
    <script language="javascript" type="text/javascript" 
        src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.0/jquery.min.js">
    </script>
		<link rel="stylesheet" type="text/css" href="css/normalize.css">
		<title >Controle de Finanas</title >
		<meta charset="UTF-8">
	</head>
	<body>
		       

      <div class="row">
        <div class="large-12 columns">
          <div class="nav-bar right">
           <ul class="button-group">
             <li><a href="receitas_despesas.php?t=1" class="button">Add Receitas</a></li>
             <li><a href="receitas_despesas.php?t=2" class="button">Add Despesas</a></li>
             <li><a href="logout.php" class="button">Sair</a></li>
            </ul>
          </div>
          <?php
          echo '<h1>'.$nome.' <small>Bem Vindo</small></h1>';
          ?>
          
          <hr/>
        </div>
      </div>
     
      <div class="row">       
        <div class="large-9 columns" role="content">
          
        	<div id="dual_x_div" style="width: 300px; height: 300px;"></div>
          <hr/>
        </div>
      </div>
      <footer class="row">
        <div class="large-12 columns">
          <hr/>
          <div class="row">
            <div class="large-6 columns">
              
            </div>
            <div class="large-6 columns">
              <ul class="inline-list right">
                <li><a href="saldosMensaisPlan.php">Visualizar Mensal</a></li>
              </ul>
            </div>
          </div>
        </div>
      </footer>
    
	</body>
</html>