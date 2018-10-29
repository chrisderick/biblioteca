<p><center><h1>Lista de Autores</h1></center></p>
<?php
	$sql = "SELECT * FROM autor";
	$res = $conn->query($sql) or die($conn->error);
	
	$qtd = $res->num_rows;
	
	if($qtd > 0){
		print "<p>Encontrou <b>$qtd</b> resultado(s)</p>";
		print "<table class='table table-bordered table-striped table-hover'>";
			print "<tr>";
			print "<th>#</th>";
			print "<th>Nome do Autor</th>";
			print "<th>Origem do Autor</th>";
			print "</tr>";
		while($row = $res->fetch_assoc()){
			print "<tr>";
			print "<td>".$row["id_autor"]."</td>";
			print "<td>".$row["nome_autor"]."</td>";
			print "<td>".$row["origem_autor"]."</td>";
			print "</tr>";
		}
		print "</table>";
	}
	else{
		print "<br><div class='alert alert-danger'>Nenhum dado cadastrado!</div>";
	}
?>