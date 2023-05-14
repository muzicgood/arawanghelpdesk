<?php 


function insert_user($id, $email, $pass, $name){
    global $pdo;
    
    $sql = "INSERT INTO users (`id`,`email`, `password`, `name`) VALUES (:id, :email,:password, :name)";
    echo $sql;
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['id'=> $id,'email' => $email, 'password' => $pass, 'name'=> $name]);
    
    header('Location: /');

}

function login_attempt($email, $pass){
    global $pdo;

    $sql = "SELECT * FROM users WHERE `email` = :email";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['email'=>$email]);

    return $stmt->fetch();
    
}





?>