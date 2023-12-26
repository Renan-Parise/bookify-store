<?php
    include "menu.php";
    require "src/livroDAO.php";
?>
<?php

    $id = $_GET['id'];
    $livroDAO = new livroDAO();
    $livroDAO->removerLivro($id);

    echo "Livro rmovido com sucesso";
?>
<?php
    include "rodape.php";
?>