<?php

include_once ('Conexao.php');

class Marca{

    protected $id_marca;
    protected $nome;

    public function setId_marca($id_marca){

        $this->id_marca = $id_marca;

    }

    public function setNome($nome){

        $this->nome = $nome;

    }

    public function getId_marca(){

        return $this->id_marca;

    }

    public function getNome(){

        return $this->nome;

    }

    public function recuperarDados()
    {
        $conexao = new Conexao();

        $sql = "select * from marca order by nome";
        return $conexao->recuperarDados($sql);
    }

}