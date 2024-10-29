<?php

$cpfcliente = $_POST ['id_cliente'];
$isbn = $_POST ['isbn'];
$verilivro = $_POST ['verilivro'];
$prazo = $_POST ['prazo'];

include ".php";

$sql = "INSERT INTO `usuario` (`CPF`, `nome_usuario`, `data_nasc`, `email`, `senha`)
VALUES ('$cpf', '$nome', '$datadenascimento', '$email', '$senha')";

if (mysqli_query($con, $sql)){
    echo "Produto cadastrado com sucesso!";  
    echo"<br> <a href = 'index.html'>Voltar </a>";   
} else{
    echo "Erro no cadastro!";
}

