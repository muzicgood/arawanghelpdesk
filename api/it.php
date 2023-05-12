<?php
    include_once "base.php";

    $sql = "select * from ittable";
    $data = get_data($sql);
    
    foreach ($data as $it){
        echo $it->name .' '. $it->desc.' '.$it->grade.' '. '<br>';
    }

?>