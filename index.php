<?php
include 'api/base.php';
include_once 'api/get_ithelp/ithelpcontrol.php';
$sql = "Select * from users";
$data = get_data($sql);

if(isset($_POST['pressme'])){
    $name ='Sangit';
    $desc='the chromebook';
    $grade= '3Dd';
    $image='test';
    insert_data($name,$desc,$grade,$image);
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <?php include_once'nav.html';?>
    <p>
        <form method="post">
        <button type="submit" name="pressme"> Press Me</button>
        

        </form>
        <table class="table table-hover">
            <th>name</th>
            <th>desc</th>
            <th>grade</th>
            <th>image</th>
            <?php 
                $data = view_itdata();
                foreach($data as $it){
                    echo "<tr> <td>".$it->name."</td><td>".$it->desc."</td><td>".$it->grade."</td><td>".$it->Image."</td></tr>";
                    
                }
            
            
            ?>
        </table>
        
    </p>
</body>
</html>
