<?php include "menu.php"; ?>

<h2>Pesquisar Livros</h2>
<form action="cadastro_livro.php">
        <label for="">Digite nome do escritor ou título do livro:  </label>
        <input type="text" name="pesquisa" id="" class="input-padrao" required="true" size=50>
                    
        <button type="submit" id="botaoId">Pesquisar</button>

</form>

<?php include "rodape.php";  ?>