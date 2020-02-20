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
		
		echo '<!DOCTYPE html>
<html>
  <head>
    <META HTTP-EQUIV="Content-Type" Content="text/html; Charset=utf-8">
	<META HTTP-EQUIV="Content-Language" Content="hu">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Főoldal</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  </head>
  <body data-spy="scroll" data-target=".navbar" data-offset="50" style="background-image: url(&apos;pictures/background.jpg&apos;);"><br/><br/>
	<ul class="nav nav-tabs">
		<li class="nav-item">
		<a class="nav-link active" href="home.php">Főoldal</a>
		</li>
		<li class="nav-item">
		<a class="nav-link" href="contact.php">Kapcsolat</a>
		</li>
	</ul>
	<nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">
	<ul class="navbar-nav">
    <li><a href="#section1">Bemutatkozás</a></li>&nbsp &nbsp &nbsp
	<li><a href="#section2">Szolgáltatások</a></li>&nbsp &nbsp &nbsp
	<li><a href="#section3">Copyright</a></li>
	</ul>
	</nav>
    <div class="jumbotron text-center" style="margin-top:0">
	<p class="title-h1">Főoldal</p>
	</div>
	<div class="jumbotron">
	<div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  
  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="pictures/php-web-development.png" alt="Phpweb" width="1100" height="500">
    </div>
    <div class="carousel-item">
      <img src="pictures/lg-leverage-of-coding.jpg" alt="Coding" width="1100" height="500">
    </div>
    <div class="carousel-item">
      <img src="pictures/when-coding-is-criminal.jpg" alt="Criminal" width="1100" height="500">
    </div>
  </div>
  
  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>
<br/>
<br/>
<br/>
<br/>
<div class="container" style="margin-top:30px">
  <div class="row">
    <div class="col-sm-6">
	<div id="section1">
	<br/>
	<br/>
  <img src="pictures/coding-funny.jpg" alt="Funny" width="500px" height="400px">
	</div>
	</div>
	<div class="col-sm-6">
	<br/>
	<br/>
	<h3>Bemutatkozás</h3>
  <p>Szeretjük megoldani az előttünk álló feladatokat, kihívásnak tekintjük munkánkat, azt a folyamatot, ahogy ügyfeleink egyedi igényeit alapul véve hatékony webes rendszereket készíthetünk.</p>
  <footer class="blockquote-footer">Kezdőlap a <cite title="Source Title"><a href="http://www.futureweb.hu/">futureweb.hu</a></cite> oldalán</footer>
	</div>
</div>
</div>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<div id="section2">
<br/>
<br/>
  <h2>Szolgáltatások</h2>
	<br/>
</div>
<br/>
<div class="card-deck">
  <div class="card">
    <img class="card-img-top" src="'.$table[0]["image"].'" width="400px" height="400px" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">'.$table[0]["name"].'</h5>
      <p class="card-text">'.$table[0]["description"].'</p>
      <p class="card-text"><small class="text-muted">'.$table[0]["date"].'</small></p>
    </div>
  </div>
  <div class="card">
    <img class="card-img-top" src="'.$table[1]["image"].'" width="400px" height="400px" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">'.$table[1]["name"].'</h5>
      <p class="card-text">'.$table[1]["description"].'</p>
      <p class="card-text"><small class="text-muted">'.$table[1]["date"].'</small></p>
    </div>
  </div>
  <div class="card">
    <img class="card-img-top" src="'.$table[2]["image"].'" width="400px" height="400px" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">'.$table[2]["name"].'</h5>
      <p class="card-text">'.$table[2]["description"].'</p>
      <p class="card-text"><small class="text-muted">'.$table[2]["date"].'</small></p>
    </div>
  </div>
</div>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<div id="section3">
<br/>
<br/>
<div class="jumbotron text-center" style="margin-bottom:0">
  <p>Copyright</p>
  <p>&copy; 2020 Lábas Tibor - Futureweb design tesztoldal</p>
</div>
</div>
	</div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>';
		}
		
	}
	
	public function contact() {
		
		global $conn;
		
		error_reporting(0);
		
		$Email = $Name = $Subject = $Message = '';
		
		echo '<!DOCTYPE html>
<html>
	<head>
		<META HTTP-EQUIV="Content-Type" Content="text/html; Charset=utf-8">
		<META HTTP-EQUIV="Content-Language" Content="hu">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>Kapcsolat</title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<script src="http://code.jquery.com/jquery-2.1.1.min.js"></script>
		<script src="js/jquery.validate.js"></script>
		<script src="js/script.js"></script>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
		<script>
		$(document).ready(function(){
		$(".toast").toast("show");
		$("#myToast").toast({ delay: 3000 });
		});
		</script>
	</head>
	<ul class="nav nav-tabs">
		<li class=" nav-item">
		<a class="nav-link" href="home.php">Főoldal</a>
		</li>
		<li class="nav-item">
		<a class="nav-link active" href="contact.php">Kapcsolat</a>
		</li>
	</ul>
	<body style="background-image: url(&apos;pictures/background.jpg&apos;);">
	<div class="jumbotron text-center">
	<p class="title-h1">Kapcsolat</p>
	</div>
	<div class="jumbotron">
	<h4>Itt küldhet az oldal szerkesztőjének üzenetet/észrevételt/hiba bejelentést/panaszt. Üzenet küldése érvényes e-mail címmel, és néhány személy adat  megadásával lehetséges. Utóbbit bizalmasan kezeljük, csak amiatt szükséges, hogy el tudjuk érni önt, és válaszolhassunk az üzenetére. A "Küldés" gomb lenyomása után visszaigazoló e-mailt kap az ön által megadott e-mail címre.</h4>
		<br />
		<form class="was-validated" action="'.htmlspecialchars($_SERVER["PHP_SELF"]).'" method="post">
			<div class="form-group">
				<label for="name"> Név:* <span class="form-text" id="name_error_message"></span></label>
				<input class="form-control" name="name" type="text" required/>
				<div class="valid-feedback">Kitöltve.</div>
				<div class="invalid-feedback">Kötelezően kitöltendő</div>
			</div>
			<div class="form-group">
				<label for="email"> E-mail cím:* <span class="form-text" id="email_error_message"></span></label>
				<input class="form-control" name="email" type="email"  required/>
				<div class="valid-feedback">Kitöltve.</div>
				<div class="invalid-feedback">Kötelezően kitöltendő</div>
			</div>
			<div class="form-group">
				<label for="phone"> Telefonszám: <span>(opcionális)</span></label>
				<input class="form-text" name="phone" type="text"/>
			</p>
			<div class="form-group">
				<label for="subject"> Tárgy:</label>
					<select name="subject">
							<option value="Panasz">Panasz</option>
							<option value="Kérdés">Kérdés</option>
							<option value="Kérelem">Kérelem</option>
							<option value="Észrevétel">Észrevétel</option>
					</select>
			</div>
			<div class="form-group">
				<label for="message"> Üzenet:* <span class="form-text" id="message_error_message"></span></label>
				<textarea class="form-control" rows="5" cols="40" minlenght="10" name="message" required></textarea>
				<div class="valid-feedback">Kitöltve.</div>
				<div class="invalid-feedback">Kötelezően kitöltendő</div>
			</div>
			<p>
				<input type="submit" value="Küldés">
			</p>
		</form>
		</div>
		<div id="section3">
<div class="jumbotron text-center" style="margin-bottom:0">
  <p>Copyright</p>
  <p text-transform: capitalize>&copy; 2020 Lábas Tibor Bence - Futureweb design tesztoldal</p>
</div>
</div>
		<script>$("#commentForm").validate();</script>
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	</body>
</html>';

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
		$mail->addAddress('kuroosa97@gmail.com', 'Me');
		$mail->Subject = 'NoReply - Köszönjük üzenetét';
		// Set HTML 
		$mail->isHTML(TRUE);
		$mail->Body = '<html>Köszönjük, hogy megkeresett <br>minket.</br> Üzenetét megkaptuk, hamarosan felvesszük <br>önnel</br> a kapcsolatot.<br> '.$Name.'<br>'.$Email.'<br>'.$Subject.'<br>'.$Name.'</html>';
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