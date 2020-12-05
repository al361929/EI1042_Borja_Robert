<?php
include(dirname(__FILE__)."/includes/ejecutarSQL.php");
include(dirname(__FILE__)."/gestionBD.php");


function listarJSON ($pdo, $table, $min, $max){
    global $pdo;
    $result = $pdo->prepare("SELECT * FROM $table");
    $result->execute();
    $datos = $result->fetchAll(PDO::FETCH_ASSOC);
    $res = [];
    foreach ($datos as $dato){
        $array = [];
        if($min == null){
            $min = 0;
        }
        if($max == null){
            $max = 2000;
        }
        foreach($dato as $key => $val){
            if($key === 'name'){
                $array['nombre'] = $val;
            }
            if($key === 'price'){
                $array['precio'] = $val;
            }
            if($key === 'foto_url'){
                $array['url'] = $val;
            }
            if($key === 'product_id'){
                $array['id'] = $val;
            }
        }
        if($array['precio'] >= $min && $array['precio'] <= $max ){
            array_push($res,$array);
        }
        
    }
    echo json_encode($res);
}
header('Content-type: application/json');
listarJSON($pdo,"producto", $_GET['min'], $_GET['max']);
?>