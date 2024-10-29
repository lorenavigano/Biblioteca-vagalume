<?php
$nomedeusuario= $_POST ['nome'];
$senha = $_POST ['senha'];

include ".php";

$sql = "INSERT INTO `emprestimo` (`ID_emprestimo`, `ISBN`, `CPF_usuario`, `CPF_cliente`, `Data_devolução`)
VALUES ('$id_emprestimo', '$isbn', '$usuario', '$cliente', '$devolucao')";

if (mysqli_query($con, $sql)){
    echo "Produto cadastrado com sucesso!";  
    echo"<br> <a href = 'index.html'>Voltar </a>";   
} else{
    echo "Erro no cadastro!";
}

