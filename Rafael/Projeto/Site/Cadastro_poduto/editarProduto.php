<?php
move_uploaded_file($_FILES["foto_produto"]["tmp_name"], "resources/img/" . $_FILES["foto_produto"]["name"]);

$foto_produto_dir =  baseUrlPublic("resources/img/") . $_FILES["foto_produto"]["name"];

$query = "UPDATE produto SET nome_produto ='$nome_produto', 
preco_produto ='$preco_produto', peso_produto ='$peso_produto', detalhes_produto ='$detalhes_produto', 
categoria ='$categoria', foto_produto ='$foto_produto_dir' 
WHERE id_produto='$id_produto';";

mysqli_query($connect, $query);

header("Location: ?page=produtos");
exit();