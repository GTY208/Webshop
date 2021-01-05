<?php
DEFINE("USER", "root");
DEFINE("PASSWORD", "root");
try{
    $verbinding = new
    PDO("mysql:host=localhost;dbname=webshop", USER,PASSWORD);
    $verbinding -> collator_set_attribute
(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
}catch(PDOExeption $e) {
    echo $e -> getMessage();
    echo "Kon geen verbinding maken.";

}
?>