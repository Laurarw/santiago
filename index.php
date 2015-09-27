<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bienvenido!</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="js/bootstrap.min.js"></script>

  </head>
  <body> 
	<div class="container">
    <div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8">
	  <fieldset>
	   <div class="jumbotron">
		<form class="form-horizontal" action="boleta.php" method="post">   
			<h1>Bienvenido!</h1>
			<p>Bienvenido a la Exprendedora.</p>
			<p><input class="btn btn-primary btn-lg" type="submit" value="Sacar turno"></p>
		</form>
		<form class="form-horizontal" action="turnos.php" method="post">   
			<p><input class="btn btn-primary btn-lg" type="submit" value="Mostrar turnos"></p>
		</form>
		</div>
		</fieldset>
    </div>
    </div>
    </div>
  </body>
</html>
