<?php
include "conectar.php";
$resultado = mysql_query("Select * from receitas where tipo=1")
$row = mysql_fetch_array($resultado);
$data = json_decode($row);
echo $data;


?>