<?php 

require_once('conexao.php');

$result = $mysqli->query("SELECT * FROM USUARIO LIMIT 10");

//printf("%s", $result->fetch_all(MYSQLI_ASSOC));

foreach($result->fetch_all(MYSQLI_ASSOC) as $row) {
    printf("CPF:%s,NOME:%s,EMAIL:%s,SENHA:%s<br></br>", $row["CPF"],$row["NOME"],$row["EMAIL"],$row["SENHA"]);
    
}
?>