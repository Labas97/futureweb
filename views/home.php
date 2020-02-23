<?php
	
	require_once '../controllers/server.php';

?>

<!DOCTYPE html>
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
<?php $instance->index(); ?>
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
</html>