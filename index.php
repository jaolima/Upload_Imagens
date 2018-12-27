<?php

// incluindo as marcas
include_once ('marca/Marca.php');
$marca = new Marca();

// Recuprando as marcas
$marcas = $marca->recuperarDados();
?>

<!DOCTYPE html>
<html lang="pt_br">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Revisão</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <form enctype="multipart/form-data" action="produto/processamento.php" method="post">
        <div class="form-group">
            <label for="nome">Nome</label>
            <input type="text" class="form-control" name="nome" id="nome" placeholder="Nome">
        </div>
        <div class="form-group">
            <label for="id_marca">Marca</label>
            <select class="form-control" name="id_marca" id="id_marca">
                <option>Selecione</option>
                <?php

                foreach ($marcas as $amarcas) { ?>

                    <option value="<?= $amarcas['id_marca'] ?>"><?= $amarcas['nome'] ?></option>

                <?php } ?>
            </select>
        </div>
        <div class="form-group">
            <label for="id_modelo">Modelo</label>
            <select class="form-control" name="id_modelo" id="id_modelo">
            </select>
        </div>
        <div class="form-group">
            <label for="valor">Valor</label>
            <input type="text" class="form-control" name="valor" id="valor" placeholder="Valor">
        </div>
        <div class="form-group">
            <label for="descricao">Descrição</label>
            <input type="text" class="form-control" name="descricao" id="descricao" placeholder="Descrição">
        </div>
        <div class="form-group">
            <label for="foto">Foto</label>
            <input type="file" class="form-control-file" name="foto" id="foto">
        </div>
        <button type="submit" class="btn btn-default">Inserir</button>
    </form>
</div>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

<script>
    $(function () {
        // AJAX para preenchimento do combo Modelo
        $('#id_marca').change(function () {

            $('#id_modelo').load('./modelo/processamento.php?acao=preenche_combo&id_marca=' + $('#id_marca').val());

        })

    })
</script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>