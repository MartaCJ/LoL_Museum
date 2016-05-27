<?php 
	include '../includes/headersub.php';
	include '../includes/connect.php';
 ?>


<!--CONTENT-->

<div class="row">
	<div class="col-xs-12 col-md-12">
		<ol class="breadcrumb">
			<li><a href="../index.php">Index</a></li>
			<li><a href="../personajes.php">Personajes</a></li>
			<li class="active">Nasus</li>
		</ol>
	</div>
</div>

<div class="row">
	<div class="col-xs-12 col-md-offset-1 col-md-3">
		
<br><br>
		<?php 
			foreach($pdo->query('SELECT * FROM campeones WHERE id ="71" ') as $row) {
							    echo "<img src='".$row['foto_normal']."' class='img-responsive' alt='". $row['nombre'] . "'></a><p class='nombre_champ' >". $row['nombre'] . "</p>";
							}
		 ?>
		

	</div>

	<div class="col-xs-12 col-md-2">
	<br><br>
		<ul class="list-group">
		<?php 
			foreach($pdo->query('SELECT * FROM campeones WHERE id ="71" ') as $row) {
							    echo "<li class='list-group-item' style='float:none;'>Nombre: ".$row['nombre']."</li><br>";
							    echo "<li class='list-group-item' style='float:none;'>Posición: ".$row['posicion']."</li><br>";
							    echo "<li class='list-group-item' style='float:none;'>Procedencia: ".$row['procedencia']."</li><br>";
							}

		 ?>

		 </ul>


	</div>
	<br><br>
		<div class="col-sm-6">
            

			     <!-- bootstrap carousel -->
				<div id="carousel-example-generic" class="carousel slide" data-ride="carousel" data-interval="false">
				  <!-- Indicators 
				  <ol class="carousel-indicators">
				    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
				    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
				    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
				    <li data-target="#carousel-example-generic" data-slide-to="3"></li>
				  </ol>-->

				  <!-- Wrapper for slides -->
				  <div class="carousel-inner">

			 		<?php 
			        $count=0;

					foreach($pdo->query('SELECT * FROM imagenes WHERE nombre_champ ="nasus" ') as $row) {
						
						echo "<div id='splash' class='item ";
						if($count == 0){echo ' active';}
						echo "'><img src='".$row['splash']."' class='img-responsive item' alt='".$row['nombre_champ'].$row['ID']."' title='".$row['nombre_champ'].$row['ID']."'  data-slide-number='".$row['ID']."' id='imagengrande'></div>";
						$count++;
						}
						 ?> 

				  </div>

				  <!-- Controls -->
				  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
				    <span class="glyphicon glyphicon-chevron-left"></span>
				  </a>
				  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
				    <span class="glyphicon glyphicon-chevron-right"></span>
				  </a>

				  <!-- Thumbnails --> 
				  <ul class="thumbnails-carousel clearfix">
					<?php  
						//MUESTRA LA LISTA DE THUMBS
						foreach($pdo->query('SELECT * FROM imagenes WHERE nombre_champ ="nasus" ') as $row) {
							echo "<li class='list-group-item' style='float:left;'><img src='".$row['splash_tile']."' class='img-responsive' alt='".$row['nombre_champ'].$row['ID']."' title='".$row['nombre_champ'].$row['ID']."'></li>";
										}
					?>
				  </ul>
				</div>





    </div>

</div>


<div class="row">
	<div class="col-xs-12 col-md-offset-3 col-md-6">
			<?php 
			foreach($pdo->query('SELECT * FROM campeones WHERE id ="71" ') as $row) {
							    echo "<div> ". $row['lore'] . "</div>";
							}
		 ?>


	</div>
</div>



 <?php 
	include '../includes/footersub.php';
  ?>