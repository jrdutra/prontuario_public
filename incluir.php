<?php

include 'conexao/conexao.php';
//captura dados da outra página
if(isset($_GET["Nnome"])) {
      $vnome=$_GET['Nnome'];
}
else{
  echo "Faltando Nome...";
}
if(isset($_GET["Nnasc"])) {
      $vnasc=$_GET['Nnasc'];
}
else{
  $vnasc="NAO INFORMADO";
}
if(isset($_GET["Nnumero"])) {
      $vnumero=$_GET['Nnumero'];
}

$vnome = tirarAcentos($vnome);
$vnome = strtoupper($vnome);


$sql = "INSERT INTO pacientes (nome, nasc, prontuario) VALUES ('$vnome', '$vnasc', '$vnumero')";

$verifica="false";
if ($link->query($sql) === TRUE) {
    $verifica="true";
} else {
    $verifica="false";
}

header("Location: frmIncluir.php?sucesso=$verifica&nome=$vnome");

mysqli_close($link);
?>
