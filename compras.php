<?php
include(dirname(__FILE__)."/includes/ejecutarSQL.php");
include(dirname(__FILE__)."/gestionBD.php");

function comprarMobile ($product){
    global $pdo;
    $query = "INSERT INTO   compra   (client_id, product_id, date_c)
                        VALUES (?,?,now())";              
    try { 
        $a=array($_SESSION['client_id'],$product);
        $consult = $pdo->prepare($query);
        $a=$consult->execute(array($_SESSION['client_id'],$product));
        if (1>$a)return "KO";
        
    } catch (PDOExeption $e) {
        return "OK";
    }
    
}
$productos=$_GET['productos'];
$res['resultado']="OK";
if(is_array($productos)){
    foreach ($productos as $product){
        if (comprarMobile((int)$product) === "KO"){
            $res['resultado']="KO";
            break;
        }
    }
}
header('Content-type: application/json');
echo json_encode($res);
?>