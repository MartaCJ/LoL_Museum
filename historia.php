<?php 
	include 'includes/header.php';
	include 'includes/connect.php';
 ?>

<!--HISTORIA DE RUNATERRA    

http://leagueoflegends.wikia.com/wiki/Runeterra

-->


<!--CONTENIDO-->

			<div class="row">
				<div class="col-xs-12 col-md-offset-3 col-md-6">
					<h1>Historia</h1>
					<h2 style="border-bottom:1px solid grey;">Runaterra</h2>
        
          <img src="img/EYUYL1N.jpg" class="img-responsive" alt="runeterra" title="runeterra" style="display:none;">

          <div class="embed-responsive embed-responsive-16by9">
            <iframe width="640" height="360" src="http://maps.wikia-services.com/api/v1/render/5114?uselang=en" frameborder="0"></iframe>
          </div>
        <br>
        <p>Runeterra (también conocida como Tierra Mágica) es el mundo ficticio donde League of Legends toma lugar. Se compone por el continente de Valoran y 12 oceanos con 3 archipiélagos. Además, varias lunas orbitan alrededor del planeta</p>

        </div>
		</div>

<br><br>

			<div id="row">
				<div class="col-xs-12 col-md-12">
				<h1>Zonas</h1>
						  <ul class="nav nav-tabs navbar-inverse" style="border-radius: 5px 5px 0px 0px;">

								<?php 
									        $count=0;

											foreach($pdo->query('SELECT * FROM lore') as $row) {
												
												echo '<li class=" ';
												if($count == 0){echo ' active';}
												echo '"><a data-toggle="tab" href="#'.$row['id_zona'].'">'.$row['zona'].'</a></li>';
												$count++;
												}
												 ?> 
						  </ul>


						<div class="tab-content">
						<?php 
						echo '<div class="linea_blanca"></div>';
						 $count=0;

											foreach($pdo->query('SELECT * FROM lore') as $row) {
												
												echo '<div id="'.$row['id_zona'].'" class="tab-pane fade ';
												if($count == 0){echo ' in active';}
												echo '">'.$row['texto'].'';

													    echo '<br><br><hr></div>';
												$count++;
												}
						?>
						</div>


				
		</div>
</div>

<br><br>



<?php 
	include 'includes/footer.php';
 ?>