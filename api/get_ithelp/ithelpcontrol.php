<?php 



function insert_data($name, $desc, $grade, $image){
    global $pdo;
    
    $sql = "INSERT INTO ittable (`name`, `desc`, `grade`, `Image`) VALUES (:name,:desc, :grade, :image)";
    echo $sql;
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['name' => $name, 'desc' => $desc, 'grade'=> $grade, 'image' => $image]);
    var_dump($sql);
    header('Location: http://localhost');

}

function view_itdata(){
    $sql = "select * from ittable";

    return get_data($sql);
}

function edit_data(){
    
}

function delete_data(){
    
}




?>