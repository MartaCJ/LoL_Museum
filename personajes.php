<?php 
	include 'includes/header.php';

	include 'includes/connect.php';

	error_reporting(E_ALL ^ E_NOTICE);
 ?>



<!--CONTENIDO-->
			<div class="row">
				<div class="col-xs-12 col-md-12">
					<ol class="breadcrumb">
						<li><a href="index.php">Index</a></li>
						<li class="active">Campeones</a></li>
					</ol>
				</div>
			</div>


			<div class="row">
				<div class="col-xs-12 col-md-offset-1 col-md-3">
				<div class=" form-group">
				<form class="navbar-form navbar-left" role="search" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>"> 
				<label>Filtro por posición del campeón</label>
				<br><br>
				<label>Primera posición</label>
					<select multiple data-placeholder="Filtro de búsqueda" class="chosen-select" style="width:350px;" tabindex="2" name='posicion'>

						<?php 

							foreach($pdo->query('SELECT * FROM posiciones WHERE posicion!="Ninguna" ORDER BY id') as $row) {
								echo "<option name='posicion' value='". $row['posicion'] . "'>". $row['posicion'] . "</option>";
							}

						 ?>

		  			</select>

<br><br>

					<label>Segunda posición</label>
		  			<select multiple data-placeholder="Filtro de búsqueda" class="chosen-select" style="width:350px;" tabindex="2" name='posicion2'>

						<?php
							foreach($pdo->query('SELECT * FROM posiciones ORDER BY id') as $row) {
							    echo "<option name='posicion2' value='". $row['posicion'] . "'>". $row['posicion'] . "</option>";
							}
						 ?>

		  			</select>	
<br><br>

				<button type="submit" class="btn btn-default">Busca</button>
<!--
				<button type="reset" class="btn btn-default">Reset</button> 

				<?php
				/*
					if(isset($_POST['reset'])){
						foreach($pdo->query('SELECT * FROM campeones ORDER BY nombre ASC') as $row) {
							    echo "<li class='list-group-item'><a href='" .$row['url']. "'><img src='".$row['foto']."' class='img-circle' /></a><span class='nombre_champ' >". $row['nombre'] . "</span></li>";
							}

					}
					*/
				?>
-->
<br><br>


<?php 
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

if(isset ($_POST['posicion']) AND !isset($_POST['posicion2'])){
						echo "Posición primaria elegida: ".$_POST['posicion']." ";
					}else if(!isset ($_POST['posicion']) AND isset($_POST['posicion2'])){
						echo "Posición secundaria elegida: ".$_POST['posicion2']." ";
					}else{
						echo "Posiciones elegidas: ".$_POST['posicion']." y ".$_POST['posicion2']." ";
					}


}
 ?>

				</form>
				
			</div>

				</div>	

				<div class="col-xs-12 col-md-6">
					<ul>
						
				<?php 
				//SENTENCIA PARA CUANDO NO EXISTAN CAMPEONES CON LA COMBINACIÓN DE FILTROS
                    $nohay = $pdo->query('SELECT COUNT(*) FROM campeones WHERE posicion="'.$_POST['posicion'].'" AND posicion2="'.$_POST['posicion2'].'" ORDER BY nombre ASC');

				//SI SE USAN LOS FILTROS
				if ($_SERVER['REQUEST_METHOD'] == 'POST') {
					

					//SI SÓLO ESTÁ SELECCIONADA LA OPCIÓN 1
					if(isset ($_POST['posicion']) AND !isset($_POST['posicion2'])){
						foreach($pdo->query('SELECT * FROM campeones WHERE posicion="'.$_POST['posicion'].'" ORDER BY nombre ASC') as $row) {
							    echo "<li class='list-group-item'><a href='" .$row['url']. "'><img src='".$row['foto']."' class='img-circle' /></a><span class='nombre_champ' >". $row['nombre'] . "</span></li>";
							}

					//SI SÓLO ESTÁ SELECCIONADA LA OPCIÓN 2
					}else if(!isset ($_POST['posicion']) AND isset($_POST['posicion2'])){
						foreach($pdo->query('SELECT * FROM campeones WHERE posicion="'.$_POST['posicion2'].'" ORDER BY nombre ASC') as $row) {
							    echo "<li class='list-group-item'><a href='" .$row['url']. "'><img src='".$row['foto']."' class='img-circle' /></a><span class='nombre_champ' >". $row['nombre'] . "</span></li>";
							}

					//SI LAS DOS OPCIONES SON IGUALES
					}else if($_POST['posicion'] == $_POST['posicion2']){
                                echo "<p>No es válido seleccionar la misma posición en ambos campos</p>";

                    //SI NO EXISTEN CAMPEONES CON ESA COMBINACIÓN 
                    }



                    else if($nohay->fetchColumn()==0){
                            echo "<p>No existen campeones con esa combinación de posiciones</p>";

                    //SI ESTÁN SELECCIONADAS LAS DOS OPCIONES Y NO SON IGUALES
                    }else{
						foreach($pdo->query('SELECT * FROM campeones WHERE posicion="'.$_POST['posicion'].'" AND posicion2="'.$_POST['posicion2'].'" ORDER BY nombre ASC') as $row) {
							    echo "<li class='list-group-item'><a href='" .$row['url']. "'><img src='".$row['foto']."' class='img-circle' /></a><span class='nombre_champ' >". $row['nombre'] . "</span></li>";
							}
					}

				//SI NO SE APLICA NINGÚN FILTRO
				}else{
						foreach($pdo->query('SELECT * FROM campeones ORDER BY nombre ASC') as $row) {
							    echo "<li class='list-group-item'><a href='" .$row['url']. "'><img src='".$row['foto']."' class='img-circle' /></a><span class='nombre_champ' >". $row['nombre'] . "</span></li>";
							}

				}

				 ?>


					</ul>
				</div>
				<div class="col-md-1">
				<br><br>
					<a href="" target="_top"><img src="img/gotop.png" width="64px" heigth="64px" title="GO TOP! :D" alt="go top button" class="img-circle" style="margin-top: 250px; margin-left:100px; position:fixed;"></a>
				<br><br>
				</div>

			</div>
			

<?php 
	include 'includes/footer.php';
 ?>
