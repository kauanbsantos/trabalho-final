<?php 

require_once('conexao.php');

$cpf = htmlspecialchars($_POST['cpf']); 


$result = $mysqli->query("DELETE FROM USUARIO WHERE cpf='$cpf'");
echo $result

?>