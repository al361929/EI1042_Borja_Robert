<?php

function añadirCarrito($client_id, $product){
    $_SESSION['item_id']+=1;
    array_push($_SESSION['cesta'], [$_SESSION['item_id'], $product]);
}
?>