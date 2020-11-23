<!--**
* * @title: EI1036_42 P1 
* * @author  Robert <al375874@uji.es> Borja <al361929@uji.es>
* * @copyright 2019 Robert Borja
* * @license CC-BY-NC-SA
* *-->
<?php

function listar($table)
{
    if(isset($_SESSION["client_id"])){
        print '<div class="visor" onload="cargaDatos();">';
        print ' </div>';
    }else{
        print "<h1> DEBES INICIAR SESIÓN </h1>";
    }
}

?>