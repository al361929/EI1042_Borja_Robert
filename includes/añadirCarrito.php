<!--**
* * @title: EI1036_42 P1 
* * @author  Robert <al375874@uji.es> Borja <al361929@uji.es>
* * @copyright 2019 Robert Borja
* * @license CC-BY-NC-SA
* *-->
<?php

function añadirCarrito($client_id, $product){
    $_SESSION['item_id']+=1;
    array_push($_SESSION['cesta'], [$_SESSION['item_id'], $product]);
}
?>