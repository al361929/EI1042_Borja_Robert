<!--**
* * @title: EI1036_42 P1 
* * @author  Robert <al375874@uji.es> Borja <al361929@uji.es>
* * @copyright 2019 Robert Borja
* * @license CC-BY-NC-SA
* *-->
<?php
include("./gestionBD.php");

function handler($pdo,$table)
{
    $datos = $_REQUEST;
    if (count($_REQUEST) < 3) {
        $data["error"] = "No has rellenado el formulario correctamente";
        return;
    }
    $query = "INSERT INTO     $table (name, price, foto_url)
                        VALUES (?,?,?)";
                       
    echo $query;
    try {
        $a=array($_POST['name'],$_POST['price'],$_POST['foto_url']);
        print_r ($a);
        $consult = $pdo->prepare($query);
        $a=$consult->execute(array($_POST['name'],$_POST['price'],$_POST['foto_url']));
        if (1>$a)echo "InCorrecto";
    
    } catch (PDOExeption $e) {
        echo ($e->getMessage());
    }
}

$table = "producto";
var_dump($_POST);
handler( $pdo,$table);
?>