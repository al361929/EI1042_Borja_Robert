<!--**
* * @title: EI1036_42 P1 
* * @author  Robert <al375874@uji.es> Borja <al361929@uji.es>
* * @copyright 2019 Robert Borja
* * @license CC-BY-NC-SA
* *-->
<?php

if (!isset($pdo)){
  try{
   $pdo = new PDO("pgsql:host=".DB_HOST.";dbname=".DB_NAME, DB_USER, DB_PASSWORD);
  }
  catch (PDOException $e) {
		echo "Failed to get DB handle: " . $e->getMessage() . "\n";
		$pdo = new PDO(
      'sqlite::memory:',
      null,
      null,
      array(PDO::ATTR_PERSISTENT => true)
    );

    $pdo -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    include_once("sqlite_test.php");
  }
}						  

?>
