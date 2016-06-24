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

			<div class="col-md-6">
				<!-- start feedwind code --><script type="text/javascript">document.write('\x3Cscript type="text/javascript" src="' + ('https:' == document.location.protocol ? 'https://' : 'http://') + 'feed.mikle.com/js/rssmikle.js">\x3C/script>');</script><script type="text/javascript">(function() {var params = {rssmikle_url: "https://feeds.feedburner.com/surrenderat20/CqWw",rssmikle_frame_width: "500",rssmikle_frame_height: "400",frame_height_by_article: "0",rssmikle_target: "_blank",rssmikle_font: "Arial, Helvetica, sans-serif",rssmikle_font_size: "14",rssmikle_border: "off",responsive: "on",rssmikle_css_url: "",text_align: "left",text_align2: "justify",corner: "on",scrollbar: "on",autoscroll: "on",scrolldirection: "up",scrollstep: "5",mcspeed: "20",sort: "New",rssmikle_title: "on",rssmikle_title_sentence: "",rssmikle_title_link: "",rssmikle_title_bgcolor: "#0AB6FF",rssmikle_title_color: "#FFFFFF",rssmikle_title_bgimage: "",rssmikle_item_bgcolor: "#FFFFFF",rssmikle_item_bgimage: "",rssmikle_item_title_length: "55",rssmikle_item_title_color: "#0066FF",rssmikle_item_border_bottom: "on",rssmikle_item_description: "on",item_link: "off",rssmikle_item_description_length: "200",rssmikle_item_description_color: "#666666",rssmikle_item_date: "gl1",rssmikle_timezone: "Etc/GMT",datetime_format: "%b %e, %Y %l:%M %p",item_description_style: "text+tn",item_thumbnail: "crop",item_thumbnail_selection: "auto",article_num: "15",rssmikle_item_podcast: "off",keyword_inc: "",keyword_exc: ""};feedwind_show_widget_iframe(params);})();</script><div style="font-size:10px; text-align:center; "><a href="http://feed.mikle.com/" target="_blank" style="color:#CCCCCC;">RSS Feed Widget</a><!--Please display the above link in your web page according to Terms of Service.--></div><!--  end  feedwind code -->
			</div>

			<div class="col-md-6">

				<div class="row">
				<div class="col-md-6">
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

			<br>

			 <p>¿Todavía no tienes cuenta en League of Legends? Create una <a href="http://euw.leagueoflegends.com/es/">AQUÍ</a></p>
</div>



				<div class="col-md-6">
					<h2>Personajes</h2>
					<p>Sección de personajes donde podrás consultar el nombre, la posición o incluso los splash arts de los campeones del juego.</p>
					<p><a class="btn btn-default" href="personajes.php" role="button">Descubre &raquo;</a></p>
				</div>
</div>
<div class="row">
				<div class="col-md-6">
					<h2>Historia</h2>
					<p>Conoce el lore de las zonas más conocidas de Runeterra y descubre la historia de este mundo.</p>
					<p><a class="btn btn-default" href="historia.php" role="button">Descubre &raquo;</a></p>
			 	</div>

				<div class="col-md-6">
					<h2>Login Screens</h2>
					<p>Las Login Screens o Pantallas de carga van cambiando en cada actualización grande del juego y si eres nuevo en el juego puede que te hayas perdido algunas la mar de chulas :D ¡Échales un vistazo!</p>
					<p><a class="btn btn-default" href="logins.php" role="button">Descubre &raquo;</a></p>
				</div>
	</div>
			</div>
			</div>


<?php 
	include 'includes/footer.php';
 ?>