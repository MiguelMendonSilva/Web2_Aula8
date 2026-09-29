<?php
$nome = $_POST['nome'];
$titulo = $_POST['titulo'];
$texto = $_POST['texto'];

$foto = $_FILES['foto']['name'];
$temp = $_FILES['foto']['tmp_name'];

move_uploaded_file($temp, $foto);

$arquivo = fopen($nome . ".md", "a");

fwrite($arquivo, "<h1>" .  $titulo . "<h1>" . "\n");

fwrite($arquivo, "<h2>" . $texto. "<h2>" . "\n");

fwrite($arquivo, "<img src='" . $foto . "'width='300'>\n");

fclose($arquivo);

echo "Tudo salvo!!";




?>