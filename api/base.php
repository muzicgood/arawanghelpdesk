<?php
$host = "localhost";
$user = "root";
$password = "";
$dbname = "arawangdb";
session_start();





// Set DSN
$dsn = 'mysql:host='.$host.';dbname='.$dbname;

global $pdo;
$pdo = new PDO($dsn,$user,$password);
$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);

echo '<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">';


//get initial data
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

//check which browser is on
function check_active($url){

    echo'<script>';
    echo'function act(){const elem = document.getElementById("'.$url.'");';
    echo'elem.className ="nav-link active";}';
    echo'act()';
    echo '</script>';


}

//guid
function getGUID() {
    $hash = md5(uniqid());
    $phash = array(
       substr($hash, 0, 8),
       substr($hash, 8, 4),
       substr($hash, 12, 4),
       substr($hash, 16, 4),
       substr($hash, 20),
     );
     return join('-', $phash);
   }





?>