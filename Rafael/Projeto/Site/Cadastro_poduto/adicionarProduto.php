<?php
move_uploaded_file($_FILES["foto_produto"]["tmp_name"], "resources/img/" . $_FILES["foto_produto"]["name"]);

$foto_produto_dir =  baseUrlPublic("resources/img/") . $_FILES["foto_produto"]["name"];


$query = "INSERT INTO entrada_produto
(nome_produto, preco_produto, peso_produto, detalhes_produto, categoria, foto_produto) 
values ('$nome_produto', '$preco_produto', '$peso_produto', '$detalhes_produto', '$categoria', '$foto_produto_dir')";

mysqli_query($connect, $query);

header("Location: ?page=produtos");
exit();