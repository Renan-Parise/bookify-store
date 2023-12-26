<?php

class Livro {

    private int $id;
    private String $escritor;
    private String $titulo;
    private float $valor;
    private int $quantidade;
    private String $descricao;
    private String $imagem;



    public function getId()
    {
        return $this->id;   
    }

    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    public function getEscritor()
    {
        return $this->escritor;   
    }

    public function setEscritor($escritor)
    {
        $this->escritor = $escritor;

        return $this;
    }

    public function getTitulo()
    {
        return $this->titulo;   
    }

    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;

        return $this;
    }

    public function getValor()
    {
        return $this->valor;   
    }

    public function setValor($valor)
    {
        $this->valor = $valor;

        return $this;
    }

    public function getQuantidade()
    {
        return $this->quantidade;   
    }

    public function setQuantidade($quantidade)
    {
        $this->quantidade = $quantidade;

        return $this;
    }

    public function getDescricao()
    {
        return $this->descricao;   
    }

    public function setDescricao($descricao)
    {
        $this->descricao = $descricao;

        return $this;
    }

    public function getImagem()
    {
        return $this->imagem;   
    }

    public function setImagem($imagem)
    {
        $this->imagem = $imagem;

        return $this;
    }

}

?>