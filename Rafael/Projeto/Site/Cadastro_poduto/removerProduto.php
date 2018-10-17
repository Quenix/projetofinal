<?php

$query = "DELETE FROM produto WHERE id_produto = $id_produto";

mysqli_query($connect, $query);

header("Location: ?page=produtos");
exit();