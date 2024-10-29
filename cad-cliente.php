<?php

$cpfcliente = $_POST ['CPF_cliente'];
$nomecliente = $_POST ['Nome_cliente'];
$email = $_POST ['Email'];
$telefone = $_POST ['Telefone'];
$datadenascimento = $_POST ['Data_de_nascimento'];
$endereco = $_POST ['Endereco'];

include "conexao.php";

$sql = "INSERT INTO `cliente` (`CPF_cliente`, `Nome_cliente`, `Email`, `Telefone`, `Data_de_nascimento`, `Endereco`)
VALUES ('$cpfcliente', '$nomecliente', '$email', '$telefone', '$datadenascimento', '$endereco')";

if (mysqli_query($con, $sql)){
    echo "Cadastrado com sucesso!";  
    echo"<br> <a href = 'index.html'>Voltar </a>";   
} else{
    echo "Erro no cadastro!";
}

