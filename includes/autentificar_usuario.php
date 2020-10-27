<?php

function autentificar_usuario($table)
{
    global $pdo;

    $query = "SELECT * FROM  $table;";
    
    $rows = $pdo->query($query)->fetchAll(\PDO::FETCH_ASSOC);

    $entra = "no";

    if (is_array($rows)) {
        foreach ($rows as $row) {
            foreach($row as $key => $value){
                $name=array_values($row)[1];
                $passwd=array_values($row)[4];
                if($name==$_POST['name'] && $passwd==$_POST['passwd']){
                    print "<h1> Inicio de sesión correcto! </h1>";
                    $_SESSION['client_id'] = array_values($row)[0];
                    print "<h1> Su ID de usuario es: ".$_SESSION["client_id"]."</h1>";
                    $entra="si";
                    $_SESSION['item_id']=0;
                    $_SESSION["cesta"]=[];
                    break;
                }
                
            }
        }
        if($entra == "no")
            print "<h1> Datos incorrectos :( </h1>";
    }  
    // echo "SESION CLIENTE ESTABLECIDA";
    // $_SESSION["client_id"] = 5;
    // $cesta[] = "";
    // $_SESSION["cesta"]=$cesta;
    }
    /*
    buscar usuario y passwd en DB y comparar con $_POST
    según el resultado fijar la variable de sesion of mostar error

    $_SESSION["usuario"] = role
    */

?>