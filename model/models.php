<?php 
function pegar_todos($itens){
    return $itens;

};
function pegar_tipo($tipo,$items){
    return array_filter($items,function($animal)use ($tipo){
        return $animal['type'] == $tipo;
    });
};
function pegar_nome($items,$nome){
    return array_filter($items,function($animal) use($nome){
        return $animal['name'] == $nome;
    });

}
?>