<?php

    include "menu.php";
    
?>
    <h2>Cadastro de Livros</h2>
    <form enctype="multipart/form-data" action="cadastra_livro.php" method="POST"> 
            <label for="escritorInput">Escritor: </label>
            <input type="text" name="escritor" id="escritorInput" class="input-padrao" required="true" size=50>

            <label for="tituloInput">Titulo: </label>
            <input type="text" name="titulo" id="tituloInput" class="input-padrao" size=50>

            <label for="valorInput">Valor: </label>
            <input type="text" name="valor" id="valorInput" class="input-padrao" required="true" size=5>
            
            <label for="quantidadeInput">quantidade: </label>
            <input type="text" name="quantidade" id="valorInput" class="input-padrao" required="true" size=5>

            <label for="descricaoInput">Descrição do Livro: </label>
            <textarea name="descricao" id="descricaoInput" cols="50" rows="5"></textarea>

            <label for="imagemInput">Imagem do Livro: </label>
            <input type="file" name="imagem" id="imagemInput" class="input-padrao" required="true">

            <button type="submit" id="botaoId">Cadastrar</button>

    </form>

<?php

    include "rodape.php";
?>