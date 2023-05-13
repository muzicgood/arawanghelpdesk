<title> Edit Page</title>
<body>
    <?php 

    include 'api/base.php';
    include 'nav.php' ;
    
    include 'api/get_ithelp/ithelpcontrol.php';
    $id =  $_GET['id'];

    
    $data = view_onedata($id);
    
    
    ?>
    <form method="Post">
        <div class="form-group">
            <label for="Name">Name</label>
            <input type="text" class="form-control" id="name" aria-describedby="name" placeholder="Enter Name" name="name" value="<?php echo $data->name ?>">
            
        </div>
        <div class="form-group">
            <label for="Desc">Description</label>
            <input type="text" class="form-control" id="desc" placeholder="Description" name="desc" value="<?php echo $data->desc ?>">
            <small id="emailHelp" class="form-text text-muted">Please describle the problem.</small>
        </div>
        <div class="form-group">
            <label for="Name">Grade</label>
            <input type="text" class="form-control" id="grade" aria-describedby="grade" placeholder="Enter grade" name="grade" value="<?php echo $data->grade ?>">
            
        </div>
        <div class="form-group">
            <label for="Image">Image</label>
            <input type="text" class="form-control" id="image" placeholder="Enter image link" name="image" value="<?php echo $data->Image ?>">
            <small id="emailHelp" class="form-text text-muted">We are still working on this function, so kindly ignore it.</small>
            
        </div>
        
        <button type="submit" class="btn btn-primary" name="edit">Submit</button>
    </form>
</body>
</html>




<?php  

    if(isset($_POST['edit'])){
        $name =$_POST['name'];
    $desc=$_POST['desc'];
    $grade= $_POST['grade'];
    $image=$_POST['image'];
    edit_data($id,$name,$desc,$grade,$image);
    }

    
    if(array_key_exists('delcon',$_GET)){
        
        
        echo "<script> if(confirm('data deleted')){document.location='/arawanghelpdesk/edit.php?id=".$id."&del=true'} else{document.location='/'}; ;</script>";
        
    }

    if(array_key_exists('del',$_GET)){
        delete_data($id);
        
    }



?>


