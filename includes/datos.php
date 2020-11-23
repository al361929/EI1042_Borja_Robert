<?php
function listarJSON ($table){
    global $pdo;
    header('Content-type:
    application/json');
    $result = $pdo->prepare("SELECT
    * FROM $table");
    $result->execute();
    $datos = $result->fetchAll(PDO::FETCH_ASSOC);
    $res = [];
    foreach ($datos as $dato){
        $array = [];
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
        }
        array_push($res,$array);
    }
    echo json_encode($res);
}
?>