<?php

include_once('Modelo.php');

$modelo = new Modelo();

//acao a que o ajax usa
switch ($_GET['acao']) {
    case 'preenche_combo':
        $modelos = $modelo->preenche_combo($_GET['id_marca']);
        foreach ($modelos as $amodelos) {
            echo "<option value='{$amodelos['id_modelo']}'>{$amodelos['nome']}</option>";
        }
        die;
        break;
}