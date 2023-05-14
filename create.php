<?php 
include 'api/base.php';
$_SESSION['current']='ticket';
include_once 'api/get_ithelp/ithelpcontrol.php';
include'nav.php';
?>

<title>Submit</title>
    
    <form method="Post">
        <div class="form-group">
            <label for="Name">Name</label>
            <input type="text" class="form-control" id="name" aria-describedby="name" placeholder="Enter Name" name="name">
            
        </div>
        <div class="form-group">
            <label for="Desc">Description</label>
            <input type="text" class="form-control" id="desc" placeholder="Description" name="desc">
            <small id="emailHelp" class="form-text text-muted">Please describle the problem.</small>
        </div>
        <div class="form-group">
            <label for="Name">Grade</label>
            <input type="text" class="form-control" id="grade" aria-describedby="grade" placeholder="Enter grade" name="grade">
            
        </div>
        <div class="form-group">
            <label for="Image">Image</label>
            <input type="text" class="form-control" id="image" placeholder="Enter image link" name="image">
            <small id="emailHelp" class="form-text text-muted">We are still working on this function, so kindly ignore it.</small>
            
        </div>
        
    <button type="submit" class="btn btn-primary" name="create">Submit</button>
</form>
    
</body>
</html>

<?php 
    if(isset($_POST['create'])){
        $id = getGUID();
        $name =$_POST['name'];
    $desc=$_POST['desc'];
    $grade= $_POST['grade'];
    $image=$_POST['image'];
    insert_data($id,$name,$desc,$grade,$image);
    }

?>