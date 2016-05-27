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
						<li class="active">Personajes</a></li>
					</ol>
				</div>
			</div>


			<div class="row">
				<div class="col-xs-12 col-md-offset-1 col-md-3">
				<div class=" form-group">
				<form class="navbar-form navbar-left" role="search" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>"> 
				<label>Filtro por tipo de campeón</label>
				<br><br>
				<label>Primer tipo</label>
					<select multiple data-placeholder="Filtro de búsqueda" class="chosen-select" style="width:350px;" tabindex="2" name='posicion'>

						<?php 

							foreach($pdo->query('SELECT * FROM posiciones ORDER BY id') as $row) {
								echo "<option name='posicion' value='". $row['posicion'] . "'>". $row['posicion'] . "</option>";
							}

						 ?>

		  			</select>

<br><br>

					<label>Segundo tipo</label>
		  			<select multiple data-placeholder="Filtro de búsqueda" class="chosen-select" style="width:350px;" tabindex="2" name='posicion2'>

						<?php
							foreach($pdo->query('SELECT * FROM posiciones ORDER BY id') as $row) {
							    echo "<option name='posicion2' value='". $row['posicion'] . "'>". $row['posicion'] . "</option>";
							}
						 ?>

		  			</select>	
<br><br>

				<button type="submit" class="btn btn-default">Busca</button>

<br><br>


<?php 
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

if(isset ($_POST['posicion']) AND !isset($_POST['posicion2'])){
						echo "Posición primaria elegida: ".$_POST['posicion']." ";
					}else if(!isset ($_POST['posicion']) AND isset($_POST['posicion2'])){
						echo "Posoción secundaria elegida: ".$_POST['posicion2']." ";
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

				if ($_SERVER['REQUEST_METHOD'] == 'POST') {
					
					if(isset ($_POST['posicion']) AND !isset($_POST['posicion2'])){
						foreach($pdo->query('SELECT * FROM campeones WHERE posicion="'.$_POST['posicion'].'" ORDER BY ID') as $row) {
							    echo "<li class='list-group-item'><a href='" .$row['url']. "'><img src='".$row['foto']."' class='img-circle' /></a><span class='nombre_champ' >". $row['nombre'] . "</span></li>";
							}
					}else if(!isset ($_POST['posicion']) AND isset($_POST['posicion2'])){
						foreach($pdo->query('SELECT * FROM campeones WHERE posicion="'.$_POST['posicion2'].'" ORDER BY ID') as $row) {
							    echo "<li class='list-group-item'><a href='" .$row['url']. "'><img src='".$row['foto']."' class='img-circle' /></a><span class='nombre_champ' >". $row['nombre'] . "</span></li>";
							}

					}else{
						foreach($pdo->query('SELECT * FROM campeones WHERE posicion="'.$_POST['posicion'].'" AND posicion2="'.$_POST['posicion2'].'" ORDER BY ID') as $row) {
							    echo "<li class='list-group-item'><a href='" .$row['url']. "'><img src='".$row['foto']."' class='img-circle' /></a><span class='nombre_champ' >". $row['nombre'] . "</span></li>";
							}
					}



				}

				else{
						foreach($pdo->query('SELECT * FROM campeones ORDER BY id') as $row) {
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