<?php 
include 'conexao.php';

// Coleta o RA do aluno
$ra = $POST['ra']; 

// Deleta o cadastro do aluno pelo RA
$recebendo_cadastros = "DELETE FROM tb_aluno WHERE ra = '$ra'";

$query_cadastros = mysqli_query($conex, $recebendo_cadastros);

header('location:listagem.php'); 
?>
