<?php
include "conectar.php";
// [
//           ['Galaxy', 'Distance', 'Brightness'],
//           ['Canis Major Dwarf', 8000, 23.3],
//           ['Sagittarius Dwarf', 24000, 4.5],
//           ['Ursa Major II Dwarf', 30000, 14.3],
//           ['Lg. Magellanic Cloud', 50000, 0.9],
//           ['Bootes I', 60000, 13.1]
//         ]
$resultado = mysql_query("Select distinct usuario from receitas where tipo=1");
$data = array('cols'=>array(
	array('id'=>'Receitas' ,'label'=>'Receitas','type'=>'string'),
	array('id'=>'Numero de receitas' ,'label'=>'Numero de receitas','type'=>'number'),
	array('id'=>'Numero de despesas' ,'label'=>'Numero de despesas','type'=>'number')
	),
	'rows'=>array()
);
while ($row = mysql_fetch_array($resultado)) {
	$result2 = mysql_query('Select count(receitas.id),usuario.nome from receitas,usuario where usuario = '.$row['usuario'].' and usuario.id = '.$row['usuario'].'');

	$row2 = mysql_fetch_array($result2);
	$data['rows'][]=array('c'=>array(
			array('v'=>$row2['nome']), array('v'=> $row2['count(receitas.id)']), array('v'=> '0')
			));
}

// $data['rows'][]=array('c'=>array(
// 			array('v'=>'bongo'), array('v'=> '24'), array('v'=> '2131')
// 			));
// $data['rows'][] = array('c'=>array(
// 			array('v'=>'chappie'), array('v'=> '78'), array('v'=> '2131')
// 			));

#header('Content-Type: application/json; charset=UTF-8');
echo json_encode($data);



?>