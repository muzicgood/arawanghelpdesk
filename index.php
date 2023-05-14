<?php
include 'api/base.php';
$_SESSION['current']='home';
include_once 'api/get_ithelp/ithelpcontrol.php';
$sql = "Select * from users";
$data = get_data($sql);

if(array_key_exists('lp',$_GET)){
    session_destroy();
    header('Location:/');
}


if(isset($_POST['pressme'])){
    $id = getGUID();
    $name ='Sangit';
    $desc='the chromebook';
    $grade= '3Dd';
    $image='test';
    insert_data($id,$name,$desc,$grade,$image);
}

?>
<?php include_once'nav.php';?>
<title> Home </title>
<body>
    
    <p>
        <form method="post">
        <button type="submit" name="pressme"> Press Me</button>
        

        </form>
        <table class="table table-hover">
            <th>name</th>
            <th>desc</th>
            <th>grade</th>
            <th>image</th>
            <th>edit</th>
            <?php 
                $data = view_itdata();
                foreach($data as $it){
                    echo "<tr> <td>".$it->name.
                    "</td><td>".$it->desc.
                    "</td><td>".$it->grade.
                    "</td><td>".$it->Image.
                    "</td><td>";
                    if(array_key_exists('logedin',$_SESSION)){
                        if($_SESSION['logedin']){
                            echo "<a href='/arawanghelpdesk/edit.php?id=".$it->id." '>Edit</a>
                            <a href='/arawanghelpdesk/edit.php?id=".$it->id."&delcon=true'>Delete</a>";
                        }
                    }
                    else{
                        echo'Login for edit';
                    }
                    
                    
                    echo"</td></tr>";
                    
                }
            
            
            ?>
        </table>
        
    </p>
</body>
</html>
