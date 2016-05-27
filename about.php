<?php 
	include 'includes/header.php';

	include 'includes/connect.php';
 ?>

<!--CONTENIDO-->
<br><br>
<div class="row">
<h1>Contacta con nosotros</h1>
<br>
	


<?php 
if($_SERVER['REQUEST_METHOD'] == 'POST'){
  echo "  <div class='col-xs-12 col-md-6'>";
    $to = "marta.cuevas.89@gmail.com"; // esta es la dirección de correo de destino
    $from = $_POST['email']; // esta es la dirección de correo del remitente
    $name = $_POST['name'];
    $subject = "Contact Form Mail";
    $subject2 = "Copia del formulario de contacto";
    $message = $name . " wrote the following:" . "\n\n" . $_POST['message'];
    $message2 = "Here is a copy of your message " . $name . "\n\n" . $_POST['message'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); // envía una copia al remitente
    echo "<h2>Email enviado. Gracias " . $name . ", contactaremos contigo en breve :D</h2>";
  echo "</div>";

    }
    else{



  
?>


<div class="col-xs-12 col-md-6">

		<!-- Start Contact Form -->
<form role="form" id="contactForm" class="contact-form" data-toggle="validator" class="shake" action="" method="post">
  <div class="form-group">
    <div class="controls">
      <input type="text" id="name" name="name" class="form-control" placeholder="Nombre" required data-error="Por favor, escriba su nombre ">
      <div class="help-block with-errors"></div>
    </div>
  </div>
  <div class="form-group">
    <div class="controls">
      <input type="email" class="email form-control" id="email" name="email" placeholder="Email" required data-error="Por favor, escriba su dirección de correo">
      <div class="help-block with-errors"></div>
    </div>
  </div>
  <div class="form-group">
    <div class="controls">
      <textarea id="message" name="message" rows="7" placeholder="Mensaje" class="form-control" required data-error="Escriba su mensaje"></textarea>
      <div class="help-block with-errors"></div>
    </div>  
  </div>
 
  <input type="submit" id="submit" class="btn btn-effect"></input>
  <div id="msgSubmit" class="h3 text-center hidden"></div> 
  <div class="clearfix"></div>   
 
</form>     
<!-- End Contact Form -->


	</div>

<?php

}

?>



	<div class="col-xs-12 col-md-6">
		<h1>Agradecimientos</h1>
			<p>Quiero agradecer a la gente que me ha apoyado a hacer este proyecto a pesar del tiempo y mis habilidades (o carencia de ellas). Gracias por creer que realmente lo terminaría en el tiempo estipulado aunque cualquiera habría pensado que no podía. Yo misma pensé que no podría acabar a tiempo. Espero que mi esfuezo, las horas que le he echado y el cariño que he volcado en este proyecto no sean en vano.</p>
	</div>




</div>

<?php 
	include 'includes/footer.php';
 ?>