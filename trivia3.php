<?php 
	include 'includes/header.php';
	include 'includes/connect.php';
 ?>


<!--CONTENIDO-->

<div class="row">
	<div class="col-xs-12 col-md-offset-3 col-md-6">
<div class="titulo_trivia">
	
	<h1>TRIVIA</h1>

	<p>¡Pon a prueba tus conocimientos sobre el juego!</p>

</div>

<br><br>
	<div class="formulario">




	<!--VERSIÓN TRES DEL FORMULARIO. PREGUNTAS Y RESPUESTAS ALEATORIAS. FALTA TRATAMIENTO DE RESPUESTAS-->
		<form  role="form" method="post" action="gracias.php"><!--ORDER BY RAND() LIMIT 0,10-->
		<?php 

				$recogepre = $pdo->query('SELECT * FROM preguntas ORDER BY RAND() LIMIT 0,10');
				while($row = $recogepre->fetch(PDO::FETCH_ASSOC) ){
					echo "<br><p>".$row['pregunta']."</p>";

						$recogeres = $pdo->query("SELECT * FROM respuestas WHERE pregid='".$row["id"]."' ORDER BY RAND() LIMIT 0,30");
						while ($row2 = $recogeres->fetch(PDO::FETCH_ASSOC)) {
						echo "<input type=\"radio\" name=\"preg-".$row["id"]."\" value=\"".$row2["id"]."\"> ".$row2["respuesta"]."</br>";
						}
					}

			?>


		<br><br>
			<input type="submit" name="enviar" value="Enviar"> 

		</form>

<br>

</div>
</div>
</div>

<?php 
	include 'includes/footer.php';
 ?>