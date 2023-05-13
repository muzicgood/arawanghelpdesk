<?php 



function insert_data($name, $desc, $grade, $image){
    global $pdo;
    
    $sql = "INSERT INTO ittable (`name`, `desc`, `grade`, `Image`) VALUES (:name,:desc, :grade, :image)";
    echo $sql;
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['name' => $name, 'desc' => $desc, 'grade'=> $grade, 'image' => $image]);
    
    header('Location: http://localhost');

}

function view_itdata(){
    $sql = "select * from ittable";

    return get_data($sql);
}

function view_onedata($id){
    global $pdo;
    $sql = "select * from ittable where `id` = :id";

    $stmt= $pdo->prepare($sql);
    $stmt->execute(['id'=> $id]);
    return $stmt->fetch();


}

function edit_data($id, $name, $desc, $grade, $image){
    global $pdo;

    $sql = "UPDATE ittable SET `name` = :name, `desc`=:desc, `grade`=:grade, `Image`=:image WHERE `id`= :id ";

    $stmt = $pdo->prepare($sql);

    $stmt->execute(['name' => $name, 'desc' => $desc, 'grade'=> $grade, 'image' => $image, 'id'=> $id]);
    header('Location: http://localhost');
    
}

function delete_data($id){
    global $pdo;
    $sql= "DELETE FROM ittable where `id`= :id";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['id'=>$id]);
    header('Location: http://localhost');
    
    
    
    
}




?>