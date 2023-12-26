<?php
require_once "ConexaoBD.php";
class LivroDAO{

    function cadastrarLivro(Livro $livro){

        $conexaoBD = ConexaoBD:: getConexao();

            $sql = "insert into livros (escritor, titulo, valor, quantidade, descricao, imagem) values 
            ('{$livro->getEscritor()}',
            '{$livro->getTitulo()}',
            '{$livro->getValor()}',
            '{$livro->getQuantidade()}',
            '{$livro->getDescricao()}',
            '{$livro->getImagem()}')";      
                             
            $conexaoBD->exec($sql);
    }

    function editarLivro(Livro $livro) {

        $sql = "update livros set
            escritor = '{$livro->getEscritor()}',
            titulo = '{$livro->getTitulo()}',
            valor = '{$livro->getValor()}',
            quantidade = '{$livro->getQuantidade()}',
            descricao = '{$livro->getDescricao()}',
            imagem = '{$livro->getImagem()}'
            where id = '{$livro->getId()}'";


        $conexaoBD = ConexaoBD::getConexao();
        $conexaoBD->exec($sql);
    }

     function obterLivros(){

            $conexaoBD = ConexaoBD:: getConexao();
    
                $sql = "select * from livros";
                                 
                $stmt = $conexaoBD->query($sql);

                $livros = $stmt->fetchAll(PDO::FETCH_ASSOC);

                return $livros;
    }

   function obterLivroPorId(int $id){
        $conexaoBD = conexaoBD::getConexao();

        $sql = "select * from livros where id=$id";

        $stmt = $conexaoBD->query($sql);

        $livro = $stmt->fetch(PDO::FETCH_ASSOC);

        return $livro;
    }

   // function atualizarLivro(){

   // }

   function removerLivro(int $id){

        $sql = "delete from livros where id=$id";
        $conexaoBD = conexaoBD::getConexao();
        $conexaoBD->exec($sql);
   }

}
?>