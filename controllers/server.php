<?php

require_once '../modells/db.php';

use PHPMailer\PHPMailer\PHPMailer;

require_once '../vendor/autoload.php';

define ('GUSER','kuroosa97@gmail.com');
define ('GPWD','19971111');

class HomeController {
	
	public function index() {
		
		global $conn;
		
		if($result = $conn->query("SELECT * FROM `service`")) {
			
			$table = $result->fetch_all(MYSQLI_ASSOC);
			
			echo '<div class="card-deck">
  <div class="card">
    <img class="card-img-top" src="' .$table[0]["image"]. '" width="400px" height="400px" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">' .$table[0]["name"]. '</h5>
      <p class="card-text">' .$table[0]["description"]. '</p>
      <p class="card-text"><small class="text-muted">' .$table[0]["date"]. '</small></p>
    </div>
  </div>
  <div class="card">
    <img class="card-img-top" src="' .$table[1]["image"]. '" width="400px" height="400px" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">' .$table[1]["name"]. '</h5>
      <p class="card-text">' .$table[1]["description"]. '</p>
      <p class="card-text"><small class="text-muted">' .$table[1]["date"]. '</small></p>
    </div>
  </div>
  <div class="card">
    <img class="card-img-top" src="' .$table[2]["image"]. '" width="400px" height="400px" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">' .$table[2]["name"]. '</h5>
      <p class="card-text">' .$table[2]["description"]. '</p>
      <p class="card-text"><small class="text-muted">' .$table[2]["date"]. '</small></p>
    </div>
  </div>
</div>';
			
		}
		
	}
	
	public function contact() {
		
		global $conn;
		
		error_reporting(0);
		
		$Email = $Name = $Subject = $Message = '';

		if(isset($_POST["name"]) && !empty($_POST["name"])) {
			
			$Name = $_POST["name"];
			
		}
		
		if(isset($_POST["email"]) && !empty($_POST["email"])) {
			
			$Email = $_POST["email"];
			
		}
		
		if(isset($_POST["subject"]) && !empty($_POST["subject"])) {
			
			$Subject = $_POST["subject"];
			
		}
		
		if(isset($_POST["message"]) && !empty($_POST["message"])) {
			
			$Message = $_POST["message"];
			
		}
			
		if(isset($_POST["name"]) && isset($_POST["email"]) && isset($_POST["subject"]) && isset($_POST["message"]) && !empty($_POST["name"]) && !empty($_POST["email"]) && !empty($_POST["subject"]) && !empty($_POST["message"]))	{
			
			$sql = "INSERT INTO email_message (sender_email,sender_name,receiver_email,receiver_name,subject,message) VALUES ('$Email','$Name','kuroosa97@gmail','LabasTibor','$Subject','$Message')";
		
		}
		
		if(!mysqli_query($conn, $sql)) {
			
			echo NULL;
			
		} else {
			
			echo NULL;
			
		}
		
	}
	
	public function sendContactEmail() {
		
		global $mail;
		$Name = $_POST["name"];
		$Email = $_POST["email"];
		$Subject = $_POST["subject"];
		$Message = $_POST["message"];
		
		// create a new object
		$mail = new PHPMailer();
		// configure an SMTP
		//$mail->SMTPDebug = 2;
		$mail->isSMTP();
		$mail->Host = 'smtp.gmail.com';
		$mail->SMTPAuth = true;
		$mail->Username = GUSER;
		$mail->Password = GPWD;
		$mail->CharSet = 'UTF-8';
		$mail->SMTPSecure = 'tls';
		$mail->SMTPAutoTLS = false;
		$mail->Port = 587;
		$mail->WordWrap  = 50;

		$mail->setFrom('kuroosa97@gmail.com', 'Tibor');
		$mail->addAddress($Email, 'Me');
		$mail->Subject = 'NoReply - Köszönjük üzenetét';
		// Set HTML 
		$mail->isHTML(TRUE);
		$mail->Body = '<html>Köszönjük, hogy megkeresett <br>minket.</br> Üzenetét megkaptuk, hamarosan felvesszük <br>önnel</br> a kapcsolatot.<br> '.$Name.'<br>'.$Email.'<br>'.$Subject.'<br>'.$Message.'</html>';
		$mail->AltBody = 'Köszönjük, hogy megkeresett minket. Üzenetét megkaptuk, hamarosan felvesszük önnel a kapcsolatot.';
		// add attachment
		//$mail->addAttachment('//confirmations/yourbooking.pdf', 'yourbooking.pdf');
		// send the message
		if(!$mail->send()){
			echo '<div class="toast" id="myToast" style="position: absolute; top: 0; right: 0;">
  <div class="toast-header">
    Üzenet
  </div>
  <div class="toast-body">
    <font color="red">Üzenet küldése sikertelen.</font><br><font face="verdana" color="red">Hiba: ' . $mail->ErrorInfo .'</font>
  </div>
</div>';
		} else {
			echo '<div class="toast" id="myToast" style="position: absolute; top: 0; right: 0;">
  <div class="toast-header">
    Üzenet
  </div>
  <div class="toast-body">
    <font color="green">Üzenet küldése sikeres</font>
  </div>
</div>';
		}
		
		
	}
	
}

$instance = new HomeController();

if(isset($_POST["name"]) && isset($_POST["email"]) && isset($_POST["subject"]) && isset($_POST["message"]) && !empty($_POST["name"]) && !empty($_POST["email"]) && !empty($_POST["subject"]) && !empty($_POST["message"])) {
	
	$instance->sendContactEmail();
	
}

?>