<!--**
* * @title: EI1036_42 P1 
* * @author  Robert <al375874@uji.es> Borja <al361929@uji.es>
* * @copyright 2019 Robert Borja
* * @license CC-BY-NC-SA
* *-->
<?php

include("./gestionBD.php");
function comprar($pdo,$table,$product)
{
    
    $query = "INSERT INTO     $table (client_id, product_id, date_c)
                        VALUES (?,?,now())";
                       
    try { 
        $a=array($_SESSION['client_id'],$product);
        $consult = $pdo->prepare($query);
        $a=$consult->execute(array($_SESSION['client_id'],$product));
        if (1>$a)echo "InCorrecto";
        
    } catch (PDOExeption $e) {
        echo ($e->getMessage());
    }
}


?>