<?php 
	include 'includes/header.php';
	include 'includes/connect.php';

	error_reporting(E_ALL ^ E_NOTICE);
 ?>


		<!-- Main jumbotron for a primary marketing message or call to action -->
		<div class="jumbotron" style="background-image: url('img/background.jpg'); color: black; background-size: cover;">
			<div class="container" id="indexbox">
				<h1>LoL Museum</h1>
				<p>Bienvenido a la web no oficial dónde encontrarás información de los campeones de League of Legends, los diferentes splash-arts de las skins que están actualmente en el juego, el lore y las pantallas de login! </p>
				<!--<p><a class="btn btn-primary btn-lg" href="#" role="button">ENTRA &raquo;</a></p>-->
			</div>
		</div>

		<div class="container">
			<!-- Example row of columns -->
			<div class="row">
				<div class="col-md-3">
					<h2>Logueate</h2>
					<p>Entra con tu cuenta de League of Legends</p>
						<form action="" method="POST">
							<input type="text" placeholder="summoner name" name="summoner_name">
							<input type="submit">
						</form>
				

			<?php 
			
			if(!empty($_POST)){

				if(!empty($_POST['summoner_name'])){

				$apiKey = 'dd7c99be-eea9-44bf-a081-666f16e69c75';
				$summonerName = $_POST['summoner_name'];
				$summonerName = strtolower($summonerName);
			 	$_SESSION['summoner_name'] = $summonerName;

				// get the basic summoner info
				$result = file_get_contents('https://euw.api.pvp.net/api/lol/euw/v1.4/summoner/by-name/' . $summonerName . '?api_key=' . $apiKey);
				$summoner = json_decode($result)->$summonerName;
				// var_dump($summoner);
				//$summoner->id;
				$_SESSION['id'] = $summoner->id;
				//echo $_SESSION['summoner_name']."<br>".$_SESSION['id'];

			      	if(!empty($_SESSION["summoner_name"])){
				      	//if($_SESSION["summoner_name"] != $_SESSION["summoner_name"]){
				      		echo "<br><p>Bienvenido <a href='http://www.lolking.net/summoner/euw/".$_SESSION['id']."'>".$_SESSION["summoner_name"]."</a></p>";
			      		//}

			      	}
				}else{
					session_destroy();
					echo "Inserte nombre de invocador";
				}

			}


			 ?>
</div>



				<div class="col-md-3">
					<h2>Personajes</h2>
					<p>Sección de personajes donde podrás consultar el nombre, la posición o incluso los splash arts de los campeones del juego.</p>
					<p><a class="btn btn-default" href="personajes.php" role="button">Descubre &raquo;</a></p>
				</div>


				<div class="col-md-3">
					<h2>Historia</h2>
					<p>Conoce el lore de las zonas más conocidas de Runeterra y descubre la historia de este mundo.</p>
					<p><a class="btn btn-default" href="lore.php" role="button">Descubre &raquo;</a></p>
			 	</div>

				<div class="col-md-3">
					<h2>Login Screens</h2>
					<p>Las Login Screens o Pantallas de carga van cambiando en cada actualización grande del juego y si eres nuevo en el juego puede que te hayas perdido algunas la mar de chulas :D ¡Échales un vistazo!</p>
					<p><a class="btn btn-default" href="logins.php" role="button">Descubre &raquo;</a></p>
				</div>


			</div>


<?php 
	include 'includes/footer.php';
 ?>