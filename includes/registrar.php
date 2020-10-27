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
    if (count($_REQUEST) < 4) {
        $data["error"] = "No has rellenado el formulario correctamente";
        return;
    }
    $query = "INSERT INTO     $table (name, email, role, passwd)
                        VALUES (?,?,?,?)";
                       
    echo $query;
    try { 
        $a=array($_REQUEST['name'],$_REQUEST['email'], 'normal', $_REQUEST['passwd']);
        print_r ($a);
        $consult = $pdo->prepare($query);
        $a=$consult->execute(array($_REQUEST['name'],$_REQUEST['email'], 'normal', $_REQUEST['passwd']));
        if (1>$a)echo "InCorrecto";
    
    } catch (PDOExeption $e) {
        echo ($e->getMessage());
    }
}

$table = "cliente";
var_dump($_POST);
handler( $pdo,$table);
?>