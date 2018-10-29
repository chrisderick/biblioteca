<!DOCTYPE html>
<p></p>
<div style="text-align: center;"><h1>Cadastro de Autores</h1></div>

	<!-- Formulários de Cadastro !-->
<form action="index.php?page=sal-autor" method="POST">

	<input type="hidden" name="acao" value="cadastrar">
	<div class="form-group">
		<label>Nome</label>
		<input type="text" name="nome_autor" class="form-control">
	</div>
	<div class="form-group">
		<label>Origem </label>
		<input type="text" name="origem_autor" class="form-control">
	</div>
	<div class="form-group">
		<button class="btn btn-info type="submit">Enviar</button>
	</div>

</form>