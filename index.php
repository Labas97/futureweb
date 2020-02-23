<?php

define('SERVER_ROOT', './');

define('SITE_ROOT', 'http://localhost/webdev/futureweb/labastibor/server.php');

require_once(SERVER_ROOT . 'modells/' . 'db.php');

?>

<!DOCTYPE HTML>
<html>
  <head>
    <META HTTP-EQUIV="Content-Type" Content="text/html; Charset=iso-8859-2">
	<META HTTP-EQUIV="Content-Language" Content="hu">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="views/css/style.css"/>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">-->
    <title>Kezdőlap</title>
  </head>
	<body style="background-image: url(&apos;views/pictures/background.jpg&apos;);">
	<h1>Üdv az oldalon, kérlek válassz egy menüpontot:<br><br>
	<a href="views/home.php" class="btn btn-outline-info btn-lg" role="button" aria-pressed="true">Kezdőlap</a>
	<a href="views/contact.php" class="btn btn-outline-info btn-lg" role="button" aria-pressed="true">Kapcsolat</a>
	<a href="https://www.linkedin.com/in/l%C3%A1bas-tibor-bence-a92935197/" class="btn btn-outline-info btn-lg" role="button" aria-pressed="true">Készítő</a>
	</h1>
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	</body>
</html>