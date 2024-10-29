<?php
$cpf = $_POST ['CPF_usuario'];
$nome = $_POST ['nome_usuario'];
$datadenascimento = $_POST ['Data_de_nascimento'];
$email = $_POST ['email'];
$senha = $_POST ['senha'];


include "conexao.php";

$sql = "INSERT INTO `usuario` (`CPF_usuario`, `nome_usuario`, `Data_de_nascimento`, `email`, `senha`)
VALUES ('$cpf', '$nome', '$datadenascimento', '$email', '$senha')";

if (mysqli_query($con, $sql)){
    echo "Cadastrado com sucesso!";  
    echo"<br> <a href = 'index.html'>Voltar </a>";   
} else{
    echo "Erro no cadastro!";
}

