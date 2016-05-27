<?php 
	//ESTE BUCLE RELLENA LA LISTA DE TIPO DE CAMPEÓN
	$lista_posiciones = array();
		foreach($pdo->query('SELECT * FROM posiciones ORDER BY id') as $row) {
			lista_posiciones[]=$row['posicion'];
		}
		echo json_decode($lista_posiciones);
 ?>