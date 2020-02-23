<?php
	
	require_once '../controllers/server.php';

	$instance->contact();
	
?>

<!DOCTYPE html>
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
		<form class="was-validated" action="<?php htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post">
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
</html>