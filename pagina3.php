<?php

    $nome = $_POST['nome'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form action="pagina4.php" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="nome"value="<?php echo $nome; ?>">

        <label>Titulo: </label>
        <input type="text" name="titulo"><br><br>

        <label>Texto: </label>
        <textarea name="texto"></textarea> <br><br>

        <label>Foto: </label>
        <input type="file" name="foto"> <br><br>

        <button type="submit">Salvar</button>

    </form>

</body>
</html>