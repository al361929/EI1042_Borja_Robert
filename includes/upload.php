<?php
function upload(){

    // En versiones de PHP anteriores a la 4.1.0, debería utilizarse $HTTP_POST_FILES en lugar
    // de $_FILES.

    $fichero_subido = basename($_FILES['file']['name']);
    print($dir_subida);
    if (move_uploaded_file($_FILES['file']['tmp_name'], $_SERVER['DOCUMENT_ROOT']."/image/".$fichero_subido)) {
        echo "El fichero es válido y se subió con éxito.\n";
    } else {
        echo "¡Posible ataque de subida de ficheros!\n";
    }

    echo 'Más información de depuración:';
    print_r($_FILES);

    print "</pre>";


}

?>
