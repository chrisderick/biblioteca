<?php
	//Conexão com o banco de dados
	$host = 'localhost';
	$user = 'root';
	$pass = '';
	$db = 'biblioteca';
         
	$conn = new mysqli($host,$user,$pass,$db);

	//Includes das páginas
	switch(@$_REQUEST["page"]){
		//Autor
		case "cad-autor":
			include("autor/cadastrar-autor.php");
		break;
		case "lis-autor":
			include("autor/listar-autor.php");
		break;
		case "edit-autor":
			include("autor/editar-autor.php");
		break;
		case "sal-autor":
			include("autor/salvar-autor.php");
		break;

		//Categoria
		case "cad-categoria":
			include("categoria/cadastrar-categoria.php");
		break;
		case "lis-categoria":
			include("categoria/listar-categoria.php");
		break;
		case "edit-categoria":
			include("categoria/editar-categoria.php");
		break;
		case "sal-categoria":
			include("categoria/salvar-categoria.php");
		break;

		//Livro
		case "cad-livro":
			include("livro/cadastrar-livro.php");
		break;
		case "lis-livro":
			include("livro/listar-livro.php");
		break;
		case "edit-livro":
			include("livro/editar-livro.php");
		break;
		case "sal-livro":
			include("livro/salvar-livro.php");
		break;

		default:
			include("dashboard.php");	
	}

?>