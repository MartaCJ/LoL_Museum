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




	<!--VERSIÓN UNO DEL FORMULARIO. AL NO CONSEGUIR QUE FUNCIONE SE OPTA POR LA VERSIÓN DOS-->
		<form  role="form" method="post"><!--ORDER BY RAND() LIMIT 0,10-->
		<?php 
				foreach($pdo->query('SELECT * FROM trivia ORDER BY RAND() LIMIT 0,10') as $row) {
					echo '<div class="form-group">'.$row['pregunta'].''.$row['respuesta1'].''.$row['respuesta2'].''.$row['respuesta3'].'</div>';

				}

			?>



	


<br><br>
			<input type="submit" name="enviar" value="Enviar"> 
			<?php 
			if ($_SERVER['REQUEST_METHOD'] == 'POST') {
				/*
				for ($i=1;$i<10;$i++){
					for ($j=1;$j<=3;$j++){
						$radio = 'optradio' . $i; 
						echo $_POST[$radio];
					}
				} 
				*/
			}
			 ?>

</form>

<br>

</div>
</div>
</div>

<?php 
	include 'includes/footer.php';
 ?>