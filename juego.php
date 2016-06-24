<?php 
	include 'includes/header.php';

	include 'includes/connect.php';
 ?>

<!--CONTENIDO-->
<br><br>
<div class="row">
	<div class="col-xs-12 col-md-offset-2 col-md-8">
		<h1>Información del juego</h1>
		<h2>¿Acabas de empezar a jugar y no sabes por dónde empezar?</h2>
			<p>Realmente como mejor se aprende es jugando pero aquí encontrarás unas pequeñas nociones sobre el juego. </p>
	</div>
</div>

<br><br>

<div class="row">

	<div class="col-xs-12 col-md-offset-2 col-md-4" id="box">
		<h3>Campeones</h3>
			<p>La Liga cuenta con campeones de todos los tipos, desde malvadas mentes criminales hasta monstruosas y épicas criaturas, pasando por todo tipo de personaje que podáis imaginar. Los diferentes campeones cubren diferentes posiciones y estrategias, así que no os desaniméis si vuestra primera elección no se adapta a vuestro estilo de juego.</p>
			<a href="personajes.php">Ver la lista de campeones</a>	

			<br>

			<h3>Controlar a vuestro campeón</h3>
			<p>Con pequeñas diferencias, los campeones usan un sistema de control tradicional de la ETR.
				<ul>
					<li>Para mover a vuestro campeón, haced clic derecho sobre el terreno al que queréis moveros.</li>
					<li>Para atacar a un enemigo, haced clic derecho sobre vuestro objetivo.</li>
					<li>Para lanzar un hechizo, haced clic izquierdo sobre el icono asociado o usad la tecla de acceso rápido del hechizo (por defecto: Q, W, E o R) y luego haced clic sobre el objetivo.</li>
				</ul>
			Los controles se pueden personalizar a través del menú Opciones.</p>
	</div>

	<div div class="col-xs-12 col-md-6">
		<img src="img/campeones.jpg" class="img-responsive" alt="campeones" id="img-redondita">
	</div>


</div>

	<br>

<div class="row">
	<div div class="col-xs-12 col-md-offset-2 col-md-4">
		<img src="img/grieta.jpg" class="img-responsive" alt="calles" id="img-redondita">
	</div>

	<div class="col-xs-12  col-md-4" id="box">
		<h3>Calles</h3>
			<p>Hay tres caminos que conectan tu base con la del enemigo. Estos caminos se llaman calles y sirven para enfrentarse al equipo enemigo. Para vencer tendréis que avanzar por la calle hasta la base enemiga y destruir el nexo que se encuentra en el centro de su base.</p>	
	</div>
</div>

	<br>

<div class="row">
	<div class="col-xs-12 col-md-offset-2 col-md-4" id="box">
		<h3>Súbditos</h3>	
			<p>Los súbditos son soldados controlados por la IA que se generan en el nexo y avanzan por cada calle hacia la base enemiga, atacando a todo oponente que se encuentren en el camino. Lograr acabar con un súbdito otorgará valioso oro a vuestro campeón. Los súbditos prefieren enfrentarse unos a otros, pero atacarán a vuestro campeón si lo encuentran solo en la calle. También cambiarán de objetivo para centrarse en vosotros si atacáis a un campeón aliado cercano. No subestiméis el poder de una gran oleada de súbditos, ¡sobre todo al principio de la partida!</p>
	</div>

	<div div class="col-xs-12 col-md-4">
		<img src="img/minions.jpg" class="img-responsive" alt="minions" id="img-redondita">
	</div>
</div>

	<br>

<div class="row">
	<div div class="col-xs-12 col-md-offset-2 col-md-4">
		<img src="img/torreta.jpg" class="img-responsive" alt="torretas" id="img-redondita">
	</div>

	<div class="col-xs-12 col-md-4" id="box">
		<h3>Torretas</h3>
			<p>Las torretas son poderosas estructuras defensivas que defienden cada calle a intervalos regulares, castigando a los enemigos que se pongan a su alcance con mortíferos disparos de energía. Al igual que los súbditos, prefieren atacar a otros objetivos que no seáis vosotros, salvo que empecéis a combatir contra otro campeón estando a su alcance. Una torreta hostil sólo irá a por vosotros si estáis atacando a un campeón enemigo o si sois el único objetivo al alcance. Tened cuidado de no empezar un enfrentamiento bajo una torreta enemiga.</p>
	</div>
</div>

	<br>

<div class="row">
	<div class="col-xs-12 col-md-offset-2 col-md-4" id="box">
		<h3>Inhibidores</h3>
			<p>Unas estructuras importantes, conocidas como inhibidores, se encuentran en el punto donde cada calle llega a la base, a ambos lados del mapa. Destruir un inhibidor crea un poderoso súper súbdito cada vez que aparezca una nueva oleada de súbditos en esa calle. Los súper súbditos son muy resistentes, por lo que son ideales para liderar la carga sobre el nexo enemigo. Los inhibidores reaparecen tras cinco minutos, así que aprovechad vuestra ventaja durante este tiempo.</p>	
			<p>Si se destruyen los tres inhibidores enemigos, serán dos los súper súbditos que se generen en cada calle cada vez que se cree una nueva oleada de súbditos.</p>
	</div>
	
	<div div class="col-xs-12 col-md-4">
		<img src="img/inhidores.jpg" class="img-responsive" alt="inhibidores" id="img-redondita">
	</div>
</div>

	<br>

<div class="row">
	<div class="col-xs-12 col-md-offset-2 col-md-4" id="box">
		<h3>El Nexo</h3>
			<p>El nexo se encuentra en el centro de cada base. Protegido por dos torretas, el nexo es la estructura que genera oleadas de súbditos en cada calle de forma periódica. Cuando un equipo haya destruido el nexo enemigo, la partida habrá acabado y ese equipo será declarado vencedor.</p>
	</div>
	
	<div div class="col-xs-12 col-md-4">
		<img src="img/nexo.png" class="img-responsive" alt="nexo" id="img-redondita">
	</div>
</div>

	<br>

<div class="row">
	<div div class="col-xs-12 col-md-offset-2 col-md-4">
		<img src="img/objetos.jpg" class="img-responsive" alt="objetos" id="img-redondita">
	</div>

	<div class="col-xs-12 col-md-4" id="box">
		<h3>Objetos</h3>
			<p>En una partida de League of Legends, vuestro campeón consigue oro al acabar con unidades y estructuras enemigas. Asestar el golpe final a un súbdito o campeón, ayudar a matar a un campeón y conseguir ciertas runas u objetos son sólo algunas de las formas de generar ingresos adicionales. Podréis usar vuestro oro para adquirir poderosos objetos en la tienda, cerca de la plataforma de invocador. Haced clic sobre la tienda o en el botón junto a vuestro total de oro para abrir la tienda.</p>

			<ul>
				<li>Los objetos otorgan bonificaciones en cuanto se adquieren; no hay por qué equipar objetos.</li>
				<li>Los diferentes campeones y estilos de juegos se adaptan mejor a diferentes configuraciones de objetos, así que vuestra estrategia determinará vuestras compras.</li>
				<li>Los objetos más poderosos se consiguen combinando objetos más pequeños, así que no dudéis en adquirir un objeto componente.</li>
				<li>El equipo que se puede usar, como pociones, guardianes u objetos activables, se usa haciendo clic sobre el icono del mismo en el inventario, o bien mediante las teclas de acceso rápido 1-6.</li>
			</ul>
	</div>
</div>

	<br>

<div class="row">
	<div class="col-xs-12 col-md-offset-2 col-md-4" id="box">
		<h3>La Jungla</h3>
			<p>Entre las calles se encuentra la jungla, una zona extensa y llena de monstruos neutrales. Estos monstruos no atacarán la base enemiga, pero derrotarlos otorga oro adicional y mejoras temporales especiales. Un jugador podrá ocupar la posición de campeón de jungla y usar estas zonas como principal fuente de ingresos. Los campeones de jungla suelen moverse entre las calles y acudir en ayuda de los aliados de la calle cuando sea necesario.</p>

	</div>

	<div div class="col-xs-12 col-md-4">
		<img src="img/gromp.jpg" class="img-responsive" alt="jungla" id="img-redondita">
	</div>
</div>

	<br>



</div>

<?php 
	include 'includes/footer.php';
 ?>