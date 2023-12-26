<?php
    include "menu.php";
    require "src/Livro.php";
    require "src/LivroDAO.php";
    require "funcoes.php";
?>

<h2>Cadastro de Livros</h2>
<div>

<?php
    $escritor = $_POST['escritor'];
    $titulo = $_POST['titulo'];
    $valor = $_POST['valor'];
    $quantidade = $_POST['quantidade'];
    $descricao = $_POST['descricao'];

    $imagem = pegarImagem($_FILES);

    //montar objeto com os dados
    $livro = new Livro();
    $livro->setEscritor($escritor);
    $livro->setTitulo($titulo);
    $livro->setValor($valor);
    $livro->setQuantidade($quantidade);
    $livro->setDescricao($descricao);
    $livro->setImagem($imagem);

    //inserir no banco de dados
    $livroDAO = new LivroDAO();
    $livroDAO->cadastrarLivro($livro);

?>

<span class="destque">O cadastro do livro foi efetuado com sucesso </span><br><br>

</div>
<?php
    include "rodape.php";
?>