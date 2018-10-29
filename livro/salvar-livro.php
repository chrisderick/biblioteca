<?php
	$titulo = @$_REQUEST["titulo_livro"];
	$autor = @$_REQUEST["autor_id_autor"];
	$categoria = @$_REQUEST["categoria_id_categoria"];
	$editora = @$_REQUEST["editora_livro"];
	$ano = @$_REQUEST["ano_livro"];
	$adult = @$_REQUEST["adulto_livro"];

	switch (@$_REQUEST["acao"]) {
		case "cadastrar":
			$sql = "INSERT INTO livro (categoria_id_categoria, autor_id_autor, titulo_livro, editora_livro, ano_livro, adulto_livro) 
                    VALUES ($categoria, $autor,'$titulo', '$editora','$ano','$adult')";
			$res = $conn->query($sql);

			if($res==true){
				print "<br><div class='alert alert-success'>Cadastrado com sucesso!</div>";
			}else{
				print "<br><div class='alert alert-danger'>Não foi possível cadastrar!</div>";
			}
		break;
		
		case "editar":
			# code...
		break;

		case "excluir":
			# code...
		break;

		default:
			# code...
		break;
	}