<?php

$nome = $_POST ['nome'];
$isbn = $_POST ['ISBN'];
$qtd_estoque = $_POST ['qtd_estoque'];
$editora = $_POST ['editora'];
$nomedoautor = $_POST ['autor'];
$classificacao = $_POST ['classificacao'];
$anodepublicacao = $_POST ['anodepublicacao'];
$idioma = $_POST ['idioma'];
$numerodepaginas = $_POST ['numerodepaginas'];
$genero = $_POST ['genero'];
$disponibilidade = $_POST ['disponibilidade'];

include "conexao.php";

$sql = "INSERT INTO `livro` (`Nome`,`ISBN`, `qtd_estoque`, `Editora`, `Nome_autor`, `Classificacao`, `Ano_de_publicacao`, `Idioma`, `Numero_de_paginas`, `Genero`, `disponibilidade`)
VALUES ('$nome','$isbn', '$qtd_estoque', '$editora', '$nomedoautor', '$classificacao', '$anodepublicacao', '$idioma', '$numerodepaginas', '$genero', '$disponibilidade')";

if (mysqli_query($con, $sql)){
    echo "Produto cadastrado com sucesso!";  
    echo"<br> <a href = 'index.html'>Voltar </a>";   
} else{
    echo "Erro no cadastro!";
}
