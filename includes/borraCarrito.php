<!--**
* * @title: EI1036_42 P1 
* * @author  Robert <al375874@uji.es> Borja <al361929@uji.es>
* * @copyright 2019 Robert Borja
* * @license CC-BY-NC-SA
* *-->
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