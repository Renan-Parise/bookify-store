<?php
    include "menu.php";
    require "src/LivroDAO.php";

    $id = $_GET['id'];
    $livroDAO = new LivroDAO();
    $livro = $livroDAO->obterLivroPorId($id);
?>

    <h2>Edição de livros</h2>
    <form enctype="multipart/form-data" action="edita_livro.php?id=<?=$livro['id']?>" method="POST"> 
    
            <label for="escritorInput">Escritor: </label>
            <input type="text" name="escritor" value="<?=$livro['escritor']?>"id="escritorInput" class="input-padrao" required="true" size=50>

            <label for="tituloInput">Titulo: </label>
            <input type="text" name="titulo" value="<?=$livro['titulo']?>"id="tituloInput" class="input-padrao" size=50>

            <label for="valorInput">Valor: </label>
            <input type="number" name="valor" value="<?=$livro['valor']?>"id="valorInput" class="input-padrao" required="true" size=5>
            
            <label for="quantidadeInput">quantidade: </label>
            <input type="text" name="quantidade" value="<?=$livro['quantidade']?>"id="valorInput" class="input-padrao" required="true" size=5>

            <label for="descricaoInput">Descrição do Livro: </label>
            <textarea name="descricao" id="descricaoInput" cols="50" rows="5"><?=$livro['descricao']?></textarea>

            <label for="imagemInput">Imagem do Livro: </label>
            <input type="file" name="imagem" id="imagemInput" class="input-padrao" required="true">

            <button type="submit" id="botaoId">Atualizar</button>

    </form>