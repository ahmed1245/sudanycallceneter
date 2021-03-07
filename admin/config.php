<?php 

$dsn = 'mysql:host=localhost;dbname=callcent';
$db_user = 'root';
$db_pass ="";
$db_options = array(
    PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
);
try {
    $con = new PDO($dsn, $db_user, $db_pass, $db_options);
    $con ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   
}catch(PDOException $e){

    echo "faild to connected". $e->getMessage();
}


