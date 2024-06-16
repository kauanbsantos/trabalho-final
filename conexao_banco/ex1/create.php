<?php 

require_once('conexao.php');

$email = htmlspecialchars($_POST['email']); 
$cpf = htmlspecialchars($_POST['cpf']);
$nome = htmlspecialchars($_POST['nome']);
$senha = htmlspecialchars($_POST['senha']);   


$result = $mysqli->query("INSERT INTO USUARIO (CPF, NOME, EMAIL, SENHA) VALUES ('$cpf', '$nome', '$email', '$senha')");
echo $result

?>