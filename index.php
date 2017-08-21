<?php 
	require_once("config.php");
	//CAREEGA UM USUÁRIO
	//$thais = new Usuario();
	//$thais->loadById(2);
	//echo $thais;

	//Carrega uma Lista de usuarios
	//$lista = Usuario::getList();
	//echo json_encode($lista);

	//Carrega uma lista de usuarios buscando pelo login
	//$search = Usuario::search("Ma");
	//echo json_encode($search);

	//Carrega um usuário usando o login e a senha
	//$usuario = new Usuario();
	//$usuario->login("thais","kelvi12345");
	//echo $usuario;
	
	//CRIANDO UM NOVO USUÁRIO INSERT
	//$aluno = new Usuario("deivisson","oito");
	//$aluno->insert();
	//echo $aluno;

	$usuario = new Usuario();
	$usuario->loadById(8);
	$usuario->update("professor","mudandoupdate");

	echo $usuario;
 ?>