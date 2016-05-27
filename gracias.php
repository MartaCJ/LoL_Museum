	<?php 
	include 'includes/header.php';
	include 'includes/connect.php';
 ?>


<!--CONTENIDO-->

<div class="row">
	<div class="col-xs-12 col-md-offset-3 col-md-6">
<div class="titulo_trivia">
	
	<h1>TRIVIA <small>Resultados</small></h1>

	<p>Éstas son las respuestas correctas a las preguntas del test, ¿Has respondido todas bien?</p>

</div>

<br><br>
	<div class="formulario">

		<?php 

				$recogepre = $pdo->query('SELECT * FROM preguntas');
				while($row = $recogepre->fetch(PDO::FETCH_ASSOC) ){
					echo "<br><p>".$row['pregunta']."</p>";

						$recogeres = $pdo->query("SELECT * FROM respuestas WHERE pregid='".$row["id"]."' and correcta='1' ");
						while ($row2 = $recogeres->fetch(PDO::FETCH_ASSOC)) {
						//echo "<input type=\"radio\" name=\"preg-".$row["id"]."\" value=\"".$row2["id"]."\"> ".$row2["respuesta"]."</br>";
						echo "<p>Respuesta correcta:<b> ".$row2["respuesta"]."</b></p>";
						}
					}

			?>


		<br><br>
	<button class="button"><a href="trivia3.php">Volver al Trivia</a></button>
</div>
</div>
</div>

<?php 
	include 'includes/footer.php';
 ?>