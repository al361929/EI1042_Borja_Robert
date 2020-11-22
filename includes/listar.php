<!--**
* * @title: EI1036_42 P1 
* * @author  Robert <al375874@uji.es> Borja <al361929@uji.es>
* * @copyright 2019 Robert Borja
* * @license CC-BY-NC-SA
* *-->
<?php

function listar($table)
{
    global $pdo;

    $query = "SELECT * FROM  $table;";
    
    $rows = $pdo->query($query)->fetchAll(\PDO::FETCH_ASSOC);
    if(isset($_SESSION["client_id"])){
    
        if (is_array($rows)) {/* Creamos un listado como una tabla HTML*/
            print '<table><thead>';
            foreach($rows[0] as $key => $value) {
                echo "<th>", $key,"</th>";
            }
            print "</thead>";
            foreach ($rows as $row) {
                print "<tr>";
                $id_product = array_values($row)[0];
                $product=array_values($row)[1];
                foreach ($row as $key => $val) {
                    if($key == "foto_url"){
                        echo '<td><image src="./image/'.$val.'"class="imgProducto"></image></td>';
                    }else{
                        echo "<td>", $val, "</td>";
                    }
                }
                echo '<td><button onclick="anyadeArticulo('.$id_product.',`'.$product.'`)">Añadir al carrito</button></td>';
                print "</tr>";
            }
            print "</table>";
        } 
        else
            print "<h1> No hay resultados </h1>"; 
    }else{
        print "<h1> DEBES INICIAR SESIÓN </h1>";
    }
}

?>