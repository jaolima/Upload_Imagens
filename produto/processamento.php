<?php
include_once ('Produto.php');

$produto = new Produto();

echo "<pre>";
print_r($_POST);
echo "</pre>";

$produto->inserir($_POST, $_FILES);

header('location: ../index.php');