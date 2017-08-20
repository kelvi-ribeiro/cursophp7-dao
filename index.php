<?php 
	require_once("config.php");

	$thais = new Usuario();

	$thais->loadById(2);

	echo $thais;
 ?>