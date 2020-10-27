<?php

function borraCarrito($item_id){
    foreach($_SESSION['cesta'] as $key => $value){
        if ($value[0] == $item_id){
            unset($_SESSION['cesta'][$key]);
            break;
        }
    }
}
?>