<?php

date_default_timezone_get('America/Sao_Paulo');

include_once "conexao.php";

header("Content-type: text/html; charset=utf-8");

echo "<br><br>";

$sqlSelect = "SELECT user_name, user_email, user_data, user_mensagem FROM users";
$rs = mysqli_query($conn, $sqlSelect);

if (mysqli_num_rows($rs) > 0){
    //dados de saída de cada linha
    //mysql_fetch_assoc() busca o resultado de uma linha e o coloca numa matriz associativa, podendo selecionar pelo nome do campo.
    while($row = mysqli_fetch_assoc($rs)){
        echo "Nome: ". $row["user_name"]." - Email: ". $row["user_email"]." - Data: ".date("d/m/Y", strtotime($row["user_data"])). " - Mensagem: ". $row["user_mensagem"]."<br>";
    }
} else {
    echo "Não foram encontrados registros cadastrados";
}
mysqli_close($conn)

?>
