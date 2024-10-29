<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta</title>
    <link rel="stylesheet" href="consulta.css">
</head>
<body>

    <nav>
        <ul>
            <li><a href="index.html"><b>Home</b></a></li>
            <li><a href="sobre-o-site.html"><b>Sobre</b></a></li>
           
        </ul>
    </nav>

    <br>
    <table>
        <tr>
            <th>Nome</th>
            <th>ISBN</th>
            <th>Quantidade de estoque</th>
            <th>Editora</th>
            <th>Autor</th>
            <th>Classificação</th>
            <th>Ano de Publicação</th>
            <th>Idioma</th>
            <th>Número de páginas</th>
            <th>Gênero</th>
            <th>Disponibilidade</th>
        </tr>
        <tbody>
            <!--aqui vai o PHP-->
        </tbody>

        <?php
        include "conexao.php";

        $sql = "SELECT * FROM livro";

        $dados = mysqli_query($con,$sql);

        while ($linha = mysqli_fetch_array($dados)){
            $nome = $linha ['Nome'];
            $isbn = $linha ['ISBN'];
            $qtd_estoque = $linha  ['qtd_estoque'];
            $editora = $linha ['Editora'];
            $nomedoautor = $linha ['Nome_autor'];
            $classificacao = $linha ['Classificacao'];
            $anodepublicacao = $linha ['Ano_de_publicacao'];
            $idioma = $linha ['Idioma'];
            $numerodepaginas = $linha ['Numero_de_paginas'];
            $genero = $linha ['Genero'];
            $disponibilidade = $linha ['disponibilidade'];

        echo "<tr>
        <td>$nome</th>
        <td>$isbn</td>
        <td>$qtd_estoque</td>
        <td>$editora</td>
        <td>$nomedoautor</td>
        <td>$classificacao</td>
        <td>$anodepublicacao</td>
        <td>$idioma</td>
        <td>$numerodepaginas</td>
        <td>$genero</td>
        <td>$disponibilidade</td>
        </tr>";
    }
    ?>
    </table>
    <br>

    <div vw class="enabled">
    <div vw-access-button class="active"></div>
    <div vw-plugin-wrapper>
      <div class="vw-plugin-top-wrapper"></div>
    </div>
  </div>
  <script src="https://vlibras.gov.br/app/vlibras-plugin.js"></script>
  <script>
    new window.VLibras.Widget('https://vlibras.gov.br/app');
  </script>

</body>
</html>
</body>
</html>
