<p></p>
<div style="text-align: center;"><h1>Lista de Livros</h1></div>
<?php
	$sql = "SELECT id_livro, titulo_livro, nome_autor, nome_categoria, editora_livro, ano_livro, adulto_livro  
            FROM livro
            INNER JOIN autor ON autor_id_autor=id_autor 
            INNER JOIN categoria ON categoria_id_categoria=id_categoria";

	$res = $conn->query($sql) or die($conn->error);

	$qtd = $res->num_rows;

	if($qtd > 0){
		print "<p><b>$qtd</b> resultado(s) encontrado(s)</p>";
		print "<table class='table table-bordered table-striped table-hover'>";
			print "<tr>";
			print "<th>#</th>";
			print "<th>Titulo</th>";
			print "<th>Autor</th>";
			print "<th>Categoria</th>";
			print "<th>Editora</th>";
			print "<th>Ano</th>";
			print "<th>+18</th>";
			print "</tr>";
		while($row = $res->fetch_assoc()){
			print "<tr>";
			print "<td>".$row["id_livro"]."</td>";
			print "<td>".$row["titulo_livro"]."</td>";
         print "<td>".$row["nome_autor"]."</td>";
         print "<td>".$row["nome_categoria"]."</td>";
			print "<td>".$row["editora_livro"]."</td>";
			print "<td>".$row["ano_livro"]."</td>";
			if($row["adulto_livro"] == 1){
                print "<td>Sim</td>";
            }else{
                print "<td>Não</td>";
            }
			print "</tr>";
		}
		print "</table>";
	}
	else{
		print "<br><div class='alert alert-danger'>Nenhum dado cadastrado!</div>";
	}
?>