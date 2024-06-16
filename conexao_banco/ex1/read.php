<?php 

require_once('conexao.php');

$cpf = htmlspecialchars($_GET['cpf']);

$result = $mysqli->query("SELECT * FROM USUARIO WHERE CPF='$cpf'");



foreach($result->fetch_all(MYSQLI_ASSOC) as $row) {
    printf("CPF:%s,NOME:%s,EMAIL:%s,SENHA:%s<br></br>", $row["CPF"],$row["NOME"],$row["EMAIL"],$row["SENHA"]);
    
}
?>