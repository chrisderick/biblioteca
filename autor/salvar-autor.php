<?php

	$nome = @$_REQUEST["nome_autor"];
	$pais = @$_REQUEST["pais_autor"];

	switch (@$_REQUEST["acao"]) {
		case "cadastrar":
			$sql = "INSERT INTO autor (nome_autor, pais_autor) VALUES ('$nome', '$pais')";
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

?>