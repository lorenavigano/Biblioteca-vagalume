<?php

$Nome = $_POST ['Nome'];
$isbn = $_POST ['ISBN'];
$usuario = $_POST ['CPF_usuario'];
$cliente = $_POST ['CPF_cliente'];
$devolucao = $_POST ['Data_devolucao'];

include "conexao.php";

$sql = "INSERT INTO `emprestimo` (`Nome`, `ISBN`, `CPF_usuario`, `CPF_cliente`, `Data_devolucao`)
VALUES ('$Nome', '$isbn', '$usuario', '$cliente', '$devolucao')";

if (mysqli_query($con, $sql)){
    echo "Produto cadastrado com sucesso!";  
    echo"<br> <a href = 'index.html'>Voltar </a>";   
} else{
    echo "Erro no cadastro!";
}

