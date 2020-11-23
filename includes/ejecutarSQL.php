<?php

/** The name of the database  */
define('DB_NAME', 'al361929_ei1036_42');

/** Fatabase username */
define('DB_USER', 'al361929');

/** Database password */
define('DB_PASSWORD', '*25061998_');

/** Database hostname */
define('DB_HOST', "db-aules.uji.es");

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');


function ejecutarSQL($query, $valor) {

    global $pdo;

    try{
        $consult = $pdo->prepare($query);
        $a = $consult->execute($valor);
    }
    catch (PDOException $e) {
        echo "Failed to get DB handle: " . $e->getMessage() . "\n";
        return NULL;
    }
    return $a;
}

?>