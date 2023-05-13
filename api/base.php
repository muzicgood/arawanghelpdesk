<?php
$host = "localhost";
$user = "root";
$password = "";
$dbname = "arawangdb";

// Set DSN
$dsn = 'mysql:host='.$host.';dbname='.$dbname;

global $pdo;
$pdo = new PDO($dsn,$user,$password);
$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);

echo '<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">';

function get_data($sql){
    global $pdo;
    if($sql != null){
        $stmt = $pdo-> prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();

    }
    else{
        return "Something went wrong";
    }
    
}



?>