<?php
require_once "conexao.php";

$nome = $_POST['nome'];
$email = $_POST['email'];
$data = $_POST['data'];
$mensagem = $_POST['mensagem'];

echo "Recebi os seguintes valores: $nome, $email, $data e $mensagem <br>";

$sqlInsert = "INSERT INTO users (user_name,user_email,user_data,user_mensagem) values ('$nome', '$email', '$data', '$mensagem')";



$rs = mysqli_query($conn,$sqlInsert) or die ("Erro ao cadastrar dados". mysqli_error($conn));
 

echo "Dados cadastrados com sucesso!";

?>
