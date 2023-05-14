<?php 
include 'api/base.php';
include 'api/user_management/usercontrol.php';

$_SESSION['current']='login';



include 'nav.php';

if(isset($_POST['submit'])){
  $email = $_POST['email'];
  $pass = $_POST['pass'];

  $data = login_attempt($email,$pass);
  if(password_verify($pass,$data->password)){
    $_SESSION['logedin']=true;
    header('Location:/');

}
else{
  echo '<script> alert("Password error, please try again"); </script>';
  
    
}

}


?>
<title> Login</title>
<form method="POST">
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input name="pass" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  
  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>