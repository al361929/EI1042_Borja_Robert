<!--**
* * @title: EI1036_42 P1 
* * @author  Robert <al375874@uji.es> Borja <al361929@uji.es>
* * @copyright 2019 Robert Borja
* * @license CC-BY-NC-SA
* *-->
<?php

function listar2()
{
    if(isset($_SESSION["client_id"])){
        print '<input list="articulos" name="buscador" id="buscador" class="buscador" onchange="muestraBusqueda()">';
        print '<datalist id="articulos">';
        print '</datalist>';
        print '<br/>';
        print '<br/>';
        print '<div class="minmax" id="minmax">';
        print '<label for="min">Min</label>';
        print '<input type="number" id="min" name="min"/>';
        print '<label for="max">Max</label>';
        print '<input type="number" id="max" name="max"/>';
        print '<button onclick="cargaPrecios()" type="button" id="minmax">Filtrar</button>';
        print '</div>';
        print '<div class="visor" id="visor" onload="cargaDatos();">';
        print '</div>';
    }else{
        print "<h1> DEBES INICIAR SESIÓN </h1>";
    }
}

?>