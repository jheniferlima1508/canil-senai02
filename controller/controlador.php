<?php
include "./data/animais.php";
include "./model/models.php";
$active = [
    "main" => "",
    "cachorros" => "",
    "gatos" => "",
    "peixes" => "",
    "passaros" => "",


];
function mainPage(){
    global $items, $active;
    $active['main'] = "active";
    $banner = "./images/a.jpg";
    $title = "todos os animais";
    $content = pegar_todos($items);

    include "./include/layout.php";
}

function gatosPage(){
    global $items, $active;
    $active['gatos'] = "active";
    $banner = "./images/banner_cat.jpg";
    $title = "Gatos";
    $lista = pegar_todos($items);
    $content = pegar_tipo("gato",$lista);
    include "./include/layout.php";
}

function cachorrosPage(){
    global $items, $active;
    $active['cachorros'] = "active";
    $banner = "./images/banner_dog.jpg";
    $title = "cachorros";
    $lista = pegar_todos($items);
    $content = pegar_tipo("cachorro",$lista);
    include "./include/layout.php";
}

function peixesPage(){
    global $items, $active;
    $active['peixes'] = "active";
    $banner = "./images/banner_fish.jpg";
    $title = "peixes";
    $lista = pegar_todos($items);
    $content = pegar_tipo("peixe",$lista);
    include "./include/layout.php";
}

function passarosPage(){
    global $items, $active;
    $active['passaros'] = "active";
    $banner = "./images/banner_passaros.jpg";
    $title = "passaros";
    $lista = pegar_todos($items);
    $content = pegar_tipo("passaro",$lista);
    include "./include/layout.php";
}

function Pesquisapage(){
    global $items;
    $nome = $_GET['nome'] ??"";
    $lista = pegar_todos($items);
    $content = pegar_nome($lista,$nome);
    include "./include/layout.php";
}

?>  