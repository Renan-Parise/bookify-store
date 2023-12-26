<?php
    include "menu.php";    

    require_once "src/LivroDAO.php";

    $livroDAO = new LivroDAO();

    $livros = $livroDAO->obterLivros();
?>
    <table>
        <tr>            
            <th>Escritor</th>
            <th>Título</th>
            <th>Valor</th>
            <th>Quantidade</th>
            <th>---</th>
        </tr>
    
        <?php
            foreach ($livros as $livro) {
        ?>
                <tr>                    
                    <td><?=$livro['escritor']?></td>
                    <td><?=$livro['titulo']?></td>
                    <td><?=$livro['valor']?></td>
                    <td><?=$livro['quantidade']?></td>

                    <td>
                        
                        <a href="remove_livro.php?id=<?=$livro['id']?>"  class="btn btn-danger btn-sm">Remover</a>
                        <a href="form_edita_livro.php?id=<?=$livro['id']?>"  class="btn btn-primary btn-sm">Editar</a>
                    </td>
                </tr>
        <?php
            }
        ?>
    </table>

<?php

    include "rodape.php";
?>