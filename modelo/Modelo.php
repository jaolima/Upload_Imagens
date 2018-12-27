<?php

include_once ('../Conexao.php');

class Modelo{

    protected $id_modelo;
    protected $id_marca;
    protected $nome;

    public function setId_modelo($id_modelo){

        $this->id_modelo = $id_modelo;

    }

    public function setId_marca($id_marca){

        $this->id_marca = $id_marca;

    }

    public function setNome($nome){

        $this->nome = $nome;

    }

    public function getId_modelo(){

        return $this->id_modelo;

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

        $sql = "select * from modelo order by nome";
        return $conexao->recuperarDados($sql);
    }

    public function preenche_combo($id_marca)
    {
        $conexao = new Conexao();

        $sql = "SELECT * FROM modelo WHERE id_marca = '$id_marca'";
        return $conexao->recuperarDados($sql);
    }

}