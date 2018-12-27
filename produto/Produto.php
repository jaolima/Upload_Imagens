<?php

include_once ('../Conexao.php');

class Produto{

    protected $id_produto; // //
    protected $nome; // //
    protected $id_marca; // //
    protected $id_modelo; // //
    protected $valor; // //
    protected $descricao; // //
    protected $foto; // //

    public function setId_produto($id_produto){

        $this->id_produto = $id_produto;

    }

    public function setNome($nome){

        $this->nome = $nome;

    }

    public function setId_marca($id_marca){

        $this->id_marca = $id_marca;

    }

    public function setId_modelo($id_modelo){

        $this->id_modelo = $id_modelo;

    }

    public function setValor($valor){

        $this->valor = $valor;

    }

    public function setDescricao($descricao){

        $this->descricao = $descricao;

    }

    public function setFoto($foto){

        $this->foto = $foto;

    }

    public function getId_produto(){

        return $this->id_produto;

    }

    public function getNome(){

        return $this->nome;

    }

    public function getId_marca(){

        return $this->id_marca;

    }

    public function getId_modelo(){

        return $this->id_modelo;

    }

    public function getValor(){

        return $this->valor;

    }

    public function getDescricao(){

        return $this->descricao;

    }

    public function getFoto(){

        return $this->foto;

    }

    public function uploadFoto(){

        if ($_FILES['foto']['error'] == UPLOAD_ERR_OK)
        {
            $origem = $_FILES['foto']['tmp_name'];
            $destino = '../upload/produtos/' . $_FILES['foto']['name'];
            move_uploaded_file($origem, $destino);
        }
    }

    public function inserir($dados, $foto)
    {
        $nome = $dados['nome'];
        $id_marca = $dados['id_marca'];
        $id_modelo = $dados['id_modelo'];
        $valor = $dados['valor'];
        $descricao = $dados['descricao'];
        $img = $_FILES['foto']['name'];

        $this->uploadFoto($foto);

        $conexao = new Conexao();

        $sql = "insert into produto (nome, id_marca, id_modelo, valor, descricao, foto)
                            values ('$nome', '$id_marca', '$id_modelo', '$valor', '$descricao', '$img')";

        return $conexao->executar($sql);
    }
}