
<!DOCTYPE html>
<html lang ="pt-BR">
<head>
	<link rel="shortcut icon" href="icone-macae\brasao.ico">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <title>Sistemas Elisangela</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script>
		function copyToClipboard(text) {
		  window.prompt("TEXTO:", text);
		  var copyText = text;
		}
	</script>
</head>
<body>
<br/>
<div class="container">
	<div class="panel panel-primary">
		<div class="panel-heading">
			<h3 class="panel-title">Incluir Novo</h3>
		</div>
		<div class="panel-body">
			<?php
					$vnome="vazio";

					if(isset($_GET["sucesso"])) {
						if(isset($_GET["nome"])){
							$vnome=$_GET["nome"];
						}
						if($_GET["sucesso"]==true){
							echo "<div class=\"alert alert-success\">
  										<strong>=) </strong> O Paciente $vnome foi adicionado na base de dados.
										</div>";
						}else{
							echo "<div class=\"alert alert-danger\">
  										<strong>=( </strong> Deu merda ao incluir $vnome.
										</div>";
						}
					}
			 ?>
			 <form action="incluir.php"  method="get">
			  <div class="form-group">
					<label for="Inome">Nome:</label>
					<input type="text" class="form-control" id="Inome" name="Nnome" required>
					<label for="Inumero">Data de Nascimento:</label>
					<input type="text" class="form-control" id="Inasc" name="Nnasc">
					<label for="Inumero">Prontuário:</label>
					<input type="text" class="form-control" id="Inumero" name="Nnumero" required>
			  </div>
			  <button type="submit" class="btn btn-success">Salvar</button>
			  <a href="index.php"><button type="button" class="btn btn-danger">Voltar</button></a>
			</form>
	  </div>
	</div>
</div>
</body>
</html>
