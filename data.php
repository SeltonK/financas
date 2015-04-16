<?php
include "conectar.php";
$resultado = mysql_query("Select distinct usuario from receitas");
$data = array('linhas'=>array('nome'=>'Nome'));
while ($row = mysql_fetch_assoc($resultado)) {
	$numdespesas = mysql_query('Select  count(id) from receitas where usuario ='.$row['usuario'].'');
	$row2=mysql_fetch_array($numdespesas);
	
}
$json = json_encode($data);
echo $json;


?>