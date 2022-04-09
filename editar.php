<?php 
include 'conexao.php';

// $POST é usado para coletar dados de formulário 
$ra = $POST['ra'];
$nome = $POST['nome']; 
$email = $POST['email'];
$telefone = $POST['telefone'];

// Editar os dados do aluno pelo RA
$recebendo_cadastros = "UPDATE tb_aluno
SET nome = '$nome', email = '$email', telefone = '$telefone'
WHERE ra = '$ra' ";

$query_cadastros = mysqli_query($conex, $recebendo_cadastros);

// Volta para a página 'Listagem'
header('location:listagem.php'); 
?>
