<p><center><h1>Lista de Livros</h1></center></p>
<?php
	$sql = "SELECT * FROM livro";
	$res = $conn->query($sql) or die($conn->error);
	
	$qtd = $res->num_rows;
	
	
	if($qtd > 0){
		print "<p>Encontrou <b>$qtd</b> resultado(s)</p>";
		print "<table class='table table-bordered table-striped table-hover'>";
			print "<tr>";
			print "<th>#</th>";
			print "<th>Titulo</th>";
			print "<th>Autor</th>";
			print "<th>Categoria</th>";
			print "<th>Editora</th>";
			print "<th>Ano</th>";
			print "<th>Adulto</th>";
			print "</tr>";
		while($row = $res->fetch_assoc()){
			print "<tr>";
			print "<td>".$row["id_livro"]."</td>";
			print "<td>".$row["titulo_livro"]."</td>";
			//Queries dos autores e categorias
			$sql = "SELECT nome_autor FROM autor"."SELECT nome_categoria FROM autor";
			print "<td>".$row["categoria_id_categoria"]."</td>";
			print "<td>".$row["editora_livro"]."</td>";
			print "<td>".$row["ano_livro"]."</td>";
			print "<td>".$row["adulto_livro"]."</td>";
			print "</tr>";
		}
		print "</table>";
	}
	else{
		print "<br><div class='alert alert-danger'>Nenhum dado cadastrado!</div>";
	}
?>