<?php
if(isset($_POST['contact_email'])) {

	// Debes editar las próximas dos líneas de código de acuerdo con tus preferencias
	$email_to = $_POST['para'];
	$email_subject = "Mensaje desde sitio Web";
	// Aquí se deberían validar los datos ingresados por el usuario
	
	if(isset($_POST['contact_subject']))
		$email_subject = $_POST['contact_subject'];
		$email_message = "Detalles del formulario de contacto:\n\n";
	if(isset($_POST['contact_name']))
		$email_message .= "Nombre: " . $_POST['contact_name'] . "\n";
		$email_message .= "E-mail: " . $_POST['contact_email'] . "\n";
	if(isset($_POST['contact_phone']))
		$email_message .= "Teléfono: " . $_POST['contact_phone'] . "\n";
	if(isset($_POST['contact_message']))
		$email_message .= "Comentarios: " . $_POST['contact_message'] . "\n\n";


	// Ahora se envía el e-mail usando la función mail() de PHP
	$headers = 'From: '.$email_from."\r\n".
	'Reply-To: '.$email_from."\r\n" .
	'X-Mailer: PHP/' . phpversion();
	@mail($email_to, $email_subject, $email_message, $headers);	
	header('Location: '.$_POST['volver']);
}	
?>