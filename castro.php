<?php 
include 'conexao.php';

// $POST é usado para coletar dados de formulário 
$nome = $POST['nome']; 
$email = $POST['email'];
$telefone = $POST['telefone'];

$recebendo_cadastros = "INSERT INTO tb_aluno
VALUES ('', '$nome', '$email', '$telefone')"
$query_cadastros = mysqli_query($conex, $recebendo_cadastros);

// Volta para a página 'Listagem'
header('location:listagem.php'); 
?>
