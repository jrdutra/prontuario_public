
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
			<a href="frmBuscar.php"><button type="button" class="btn btn-danger">Voltar</button></a><br/>
			<table class="table table-striped">
		  <thead>
		    <tr>
		      <th scope="col">Nome</th>
		      <th scope="col">Prontuario</th>
		      <th scope="col">Nascimento</th>
		    </tr>
		  </thead>
		  <tbody>
					<?php
							include 'conexao/conexao.php';
							$vnome="";
							if(isset($_GET["Nnome"])) {
								$vnome=$_GET['Nnome'];
							}else{
								$vnome="";
							}

							//passa tudo para maiusculo
							$vnome = tirarAcentos($vnome);
							$vnome = strtoupper($vnome);

							$sql  = mysqli_query($link,"SELECT * FROM pacientes WHERE nome like '%$vnome%' order by nome");


							if($sql){ // If $sql is True
						    while($exibe = mysqli_fetch_assoc($sql)){
						        echo "<tr>
														<td>".$exibe["nome"]."</td>
														<td>".$exibe["prontuario"]."</td>
														<td>".$exibe["nasc"]."</td>
													</tr>";

						    }
							}else{
								echo "<tr>
												<td>-</td>
												<td>-</td>
												<td>-</td>
											</tr>";
							}
					 ?>
				 </tbody>
		</table>
	  </div>
	</div>
</div>
</body>
</html>
