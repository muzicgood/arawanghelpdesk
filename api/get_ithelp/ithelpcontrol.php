<?php 



function insert_data($id, $name, $desc, $grade, $image){
    global $pdo;
    
    $sql = "INSERT INTO ittable (`id`,`name`, `desc`, `grade`, `Image`) VALUES (:id, :name,:desc, :grade, :image)";
    echo $sql;
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['id'=> $id,'name' => $name, 'desc' => $desc, 'grade'=> $grade, 'image' => $image]);
    
    header('Location: /');

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
    header('Location: /');
    
}

function delete_data($id){
    global $pdo;
    $sql= "DELETE FROM ittable where `id`= :id";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['id'=>$id]);
    header('Location: /');
    
    
    
    
}




?>