<!--**
* * @title: EI1036_42 P1 
* * @author  Robert <al375874@uji.es> Borja <al361929@uji.es>
* * @copyright 2019 Robert Borja
* * @license CC-BY-NC-SA
* *-->
<?php
session_start();
//var_dump($GLOBALS);
include(dirname(__FILE__)."/includes/ejecutarSQL.php");
include(dirname(__FILE__)."/gestionBD.php");
include(dirname(__FILE__)."/includes/autentificar_usuario.php");
include(dirname(__FILE__)."/includes/listar.php");
include(dirname(__FILE__)."/includes/añadirCarrito.php");
include(dirname(__FILE__)."/includes/borraCarrito.php");
include(dirname(__FILE__)."/includes/comprar.php");
include(dirname(__FILE__)."/partials/header.php");
include(dirname(__FILE__)."/partials/menu.php");
include(dirname(__FILE__)."/includes/upload.php");


if (isset($_REQUEST['action']))
    $action = $_REQUEST["action"];
else 
    $action = "home";
$table="producto";
if(isset($_SESSION["client_id"]))
    echo "ID CLIENTE:".$_SESSION["client_id"];
switch ($action) {
    case "home":
        $central = "/home.php";
        break;
    case "login": 
        $central = "/partials/login.php";
        break;
    case "do_login":
        $central = autentificar_usuario("cliente");
        break;
    case "carrito":
        $central = "/carrito.php";
        break;
    case "registro":
         $central = "/partials/registro_usuario.php";
        break;
    case "delete":
        borraCarrito($_GET['item_id']);
        $central = "/carrito.php";
        break;
    case "registrar":
        $central = "/includes/registrar.php";
        break;
    case "addProducto":
        $central = "/partials/addProductos.php";
        break;
    case "add":
        añadirCarrito($_SESSION['client_id'], $_GET['product']);
        $central = listar("producto");
        break;
    case "registrarProducto":
        $central = "/includes/registrarProducto.php";
        break;
    case "productos":
        $central = listar("producto");
        break;
    case "comprar":
        foreach($_SESSION['cesta'] as $key => $value){
            comprar($pdo,"compra",$value[1]);
            unset($_SESSION['cesta'][$key]);
        }
        $central = "/compraRealizada.php";
        break;
    case "upload":
        upload();
        $central = "/partials/addProductos.php";
        break;
    default:
        $data["error"] = "Accion No permitida";
        $central = "/home.php";
}
if ($central <> "") include(dirname(__FILE__).$central);
include(dirname(__FILE__)."/partials/footer.php");
?>