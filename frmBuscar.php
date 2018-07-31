
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
			<h3 class="panel-title">Busca por nome</h3>
		</div>
		<div class="panel-body">

			 <form form action="frmExibir.php"  method="get">
			  <div class="form-group">
				<label for="Inome">Nome:</label>
				<input type="text" class="form-control" id="Inome" name="Nnome">
			  </div>
			  <button type="submit" class="btn btn-success">Buscar</button>
			  <a href="index.php"><button type="button" class="btn btn-danger">Voltar</button></a>
			</form>

	  </div>
	</div>
</div>
</body>
</html>
