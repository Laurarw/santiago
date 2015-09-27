<?php

if(!isset($_SESSION)){
	session_start();
}


 if($_SERVER['REQUEST_METHOD'] == 'POST')
  	{
		$pdo = new PDO('mysql:host=localhost;dbname=registros','root','udc');

		$sql = "INSERT INTO usuarios (apellido, nombre, dni, sexo, nacionalidad)
				values (:apellido, :nombre ,:dni, :sexo, :nacionalidad)";

		$stmt = $pdo->prepare($sql);

		$stmt->bindParam(':apellido', $apellido, PDO::PARAM_STR);

		$stmt->execute();

		header("Location: index.php");
	}