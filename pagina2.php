<?php

$nome = $_POST['nome'];

$arquivo = fopen($nome . ".md", "r");

while (!feof($arquivo)){

    $linha = fgets($arquivo);

    echo $linha;

}

fclose($arquivo);

?>