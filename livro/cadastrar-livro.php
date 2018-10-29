<p><center><h1>Cadastro de Livros</h1></center></p>

	<!-- Formulários de Cadastro !-->
<form action="index.php?page=sal-livro&acao=cadastrar" method="POST">
	<!-- Inserir Dropdown !-->
	<section class="col-6 mx-auto">
		<div class="form-group">
			<label>Título</label>
			<input type="text" name="titulo_livro" class="form-control">
		</div>
		<div class="form-group">
			<label>Autor</label>
			<?php
				$query_autor = "SELECT id_autor,nome_autor FROM autor";
				$unicornia = mysqli_query($conn, $query_autor);

				$op = "<select class='form-control' name='autor_id_autor'>";

				while ($row_autor = mysqli_fetch_assoc($unicornia)){
					@$op .= "<option value = '{$row_autor ['id_autor']}'>{$row_autor ['nome_autor']}</option>";
				} 

				$op .= "</select>";

				echo $op;
			?>

		</div>
		<div class="form-group">
			<label>Categoria</label>
			<?php
				$query_categoria = "SELECT id_categoria,nome_categoria FROM categoria";
				$unicornio = mysqli_query($conn, $query_categoria);

				$op = "<select class='form-control' name='categoria_id_categoria'>";

				while ($row_autor = mysqli_fetch_assoc($unicornio)){
					@$op .= "<option value = '{$row_autor ['idcategoria']}'>{$row_autor ['nome_categoria']}</option>";
				} 

				$op .= "</select>";

				echo $op;
			?>
		</div>

		<!-- Inserir Texto !-->
		<div class="form-group">
			<label>Editora</label>
			<input type="text" name="editora_livro" class="form-control">
		</div>
		<div class="form-group">
			<label>Ano de Publicação</label>
			<input type="number" name="ano_livro" class="form-control">
		</div>
		<label>É contraindicado para menores de 18 anos? &nbsp;</label>
		<div class="form-check-inline">
			<label class="form-check-label">
				<input type="radio" name="adulto_livro" class="form-check-input" value="1">Sim	
			</label>
		</div>
		<div class="form-check-inline">
			<label class="form-check-label">
				<input type="radio" name="adulto_livro" class="form-check-input" value="0">Não		
			</label>
		</div>
			<div class="form-group">
				<button class="btn btn-info type="submit">Enviar</button>
			</div>
	</section>
	
</form>