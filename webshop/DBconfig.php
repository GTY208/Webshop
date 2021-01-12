<?php

DEFINE("USER", "root");
DEFINE("PASSWORD", "");

try{
    $verbinding = new 
    PDO("mysql:host=localhost;dbname=webshop", USER, PASSWORD);
    $verbinding->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOExeption $e){
    echo $e->getMessage();
    echo "Kon geen verbinding maken";
}

?>