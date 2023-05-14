<?php 


include 'api/base.php';
include 'api/user_management/usercontrol.php';

$_SESSION['current']='register';
include 'nav.php';

if(array_key_exists('logedin',$_SESSION)){
  if($_SESSION['logedin']){
    header('Location:/');

  }
  
}

if(isset($_POST['submit'])){
  $id = getGUID();
  $email = $_POST['email'];
  $name = $_POST['name'];
  $pass = password_hash($_POST['pass'], PASSWORD_DEFAULT);
  $pass2 = password_hash($_POST['pass2'], PASSWORD_DEFAULT);

  if (password_verify($_POST['pass2'], $pass)){
    insert_user($id,$email,$pass,$name);
    echo '<script> alert("User registered"); document.location="/arawanthelpdesk/login.php"; </script>';
    
  }else{
    echo '<script> alert("Password error, please try again"); </script>';
  }

}


?>
<title>Register</title>
<form method="POST">
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    <label for="Name">Username</label>
    <input type="text" name = "name" class="form-control" id="Name" aria-describedby="emailHelp" placeholder="Enter your first name">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" name= "pass" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Confirm Password</label>
    <input type="password" name= "pass2" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  <button type="submit" class="btn btn-primary" name='submit'>Submit</button>
</form>