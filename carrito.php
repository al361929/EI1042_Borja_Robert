<!--**
* * @title: EI1036_42 P1 
* * @author  Robert <al375874@uji.es> Borja <al361929@uji.es>
* * @copyright 2019 Robert Borja
* * @license CC-BY-NC-SA
* *-->
<?php
global $pdo;
$table="producto";
$query = "SELECT * FROM  $table;";

$rows = $pdo->query($query)->fetchAll(\PDO::FETCH_ASSOC);
if(isset($_SESSION["client_id"])){
    print '<table>';
    print '<thead>';
    echo "<th>Id del producto</th>";
    echo "<th>Nombre del producto</th>";
    echo "<th>Precio</th>";
    echo "<th>Imagen URL</th>";
    print "</thead>";
    foreach($_SESSION['cesta'] as $key => $value){
        print "<tr>";
        echo "<td>", $value[1] ,"</td>";
        foreach ($rows as $row) {
            $product=array_values($row)[0];
            if($product == $value[1]){
                echo "<td>", array_values($row)[1], "</td>";
                echo "<td>", array_values($row)[2], "</td>";
                echo "<td>", array_values($row)[3], "</td>";
            }
        }
        echo '<td><button><a href="?action=delete&item_id='.$value[0].'">Eliminar</a></button></td>';
        print "</tr>";
        
    }
    print "<tr>";
    echo "<td><button><a href=?action=comprar>Comprar</a></button></td>";
    print "</tr>";
    print "</table>";
}
?>