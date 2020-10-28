<!--**
* * @title: EI1036_42 P1 
* * @author  Robert <al375874@uji.es> Borja <al361929@uji.es>
* * @copyright 2019 Robert Borja
* * @license CC-BY-NC-SA
* *-->
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
    }

?>