<?php 

require_once('conexao.php');

$email = htmlspecialchars($_POST['email']); 
$cpf = htmlspecialchars($_POST['cpf']);
$nome = htmlspecialchars($_POST['nome']);
$senha = htmlspecialchars($_POST['senha']);   


$result = $mysqli->query("UPDATE  USUARIO SET CPF='$cpf', NOME='$nome',EMAIL='$email',SENHA='$senha' WHERE cpf='$cpf'");
echo $result


?>