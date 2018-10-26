<p><center><h1>Cadastro de Livros</h1></center></p>

	<!-- Formulários de Cadastro !-->
<form action="index.php?page=sal-livro&acao=cadastrar" method="POST">

	<div class="form-group">
		<label>Título</label>
		<input type="text" name="titulo_livro" class="form-control">
	</div>
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
			<input type="radio" name="adulto_livro" class="form-check-input" value="true">Sim	
		</label>
	</div>
	<div class="form-check-inline">
		<label class="form-check-label">
			<input type="radio" name="adulto_livro" class="form-check-input" value="false">Não		
		</label>
	</div>
		<div class="form-group">
			<button class="btn btn-info type="submit">Enviar</button>
		</div>

	
</form>