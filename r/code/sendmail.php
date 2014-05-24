<?
					
		$sitio="MERCADITO DEL CERRO";
		$para = "bpicone@zigna.com.ar";
		$extraMensaje='';
		
		$nombre=strip_tags($_POST['name']);
		$lastname=strip_tags($_POST["lastname"]);
		$email=strip_tags($_POST['email']);
		$phone=strip_tags($_POST['phone']);
		$mensaje=strip_tags($_POST['question']);
		
		$emailcontent = "Contacto $sitio
.............................................................................
Nombre: $nombre $lastname
Email: $email 
Telefono: $phone 
.............................................................................

Mensaje: 

$mensaje 
"; 
				
				$e=0;
				$error="";
				$preg_match="^[-A-Za-z0-9_]+[-A-Za-z0-9_.]*[@]{1}[-A-Za-z0-9_]+[-A-Za-z0-9_.]*[.]{1}[A-Za-z]{2,5}$";
				
				
				
				
				if( $e==0 ) {
					$subject = "Contacto $sitio";
					$headers = "From:" . $email;
					
					// PHP mailer
					require_once('../PHPMailer/class.phpmailer.php');
		
					$xemail = new PHPMailer();
					
					$xemail->From      = $email;
					$xemail->FromName  = $nombre." ".$lastname;
					$xemail->Subject   = 'Contacto Web: '.$nombre;
					$xemail->Body      = $mensaje;
					$xemail->AddAddress( $para );
					
					if ( $xemail->Send()) {
						echo '   
             	<form id="sendMail" action="r/code/sendmail.php" method="post">
              	<label> <input class="validar" type="text" name="name"placeholder="Nombre" required="required"></label>
              	<label><input class="validar" type="text" name="lastname"placeholder="Apellido" required="required"></label>
                <label><input class="validar" type="email" name="email" placeholder="Email" required ></label>
                <label> <input class="validar" type="tel" name="phone" placeholder="Telefono" required></label>
                <label><textarea class="validar" name="question"  placeholder="Consulta" required ></textarea></label>
                <input class=" button" type="submit" value="Enviar">
              </form>
						<script type="text/javascript"> alert("Muchas Gracias por tu consulta")</script>';
						return;
					}else{
						echo "<p>NOT SENT</p>";
					}
					
					// fin PHP mailer
					
					}else{
					echo "<p class='notsent'>".$error.".</p>";
				}  		
			
?>