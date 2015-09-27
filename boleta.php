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
      <h1>Bienvenido!</h1>
      <p>Elija Sector a retirar turno.</p>
		  <form class="form-horizontal" action="caja_de_ahorro.php" method="post">   
			 <p><input class="btn btn-primary btn-lg" type="submit" value="Caja de Ahorro"></p>
		  </form>
		  <form class="form-horizontal" action="hipoteca.php" method="post">   
			 <p><input class="btn btn-primary btn-lg" type="submit" value="Hipotecas"></p>
		  </form>
      <form class="form-horizontal" action="prestamos.php" method="post">   
       <p><input class="btn btn-primary btn-lg" type="submit" value="Prestamos"></p>
      </form>
      <form class="form-horizontal" action="creditos.php" method="post">   
       <p><input class="btn btn-primary btn-lg" type="submit" value="Creditos"></p>
      </form>
      </form>
      <form class="form-horizontal" action="index.php" method="post">   
       <p><input class="btn btn-primary btn-lg" type="submit" value="Volver"></p>
      </form>
		</div>
		</fieldset>
    </div>
    </div>
    </div>
  </body>
</html>
