<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=4, initial-scale=1.0">
    
</head>
<nav>
    <ul class="nav nav-tabs">
        <li class="nav-item"><a class="nav-link" id="home" href="/">Home</a></li>
        <li class="nav-item" ><a class="nav-link" id="ticket" href="/arawanghelpdesk/create.php">Submit a ticket</a></li>
        
        <?php 
        if(array_key_exists('logedin',$_SESSION)){
            echo '<li class="nav-item"><a class="nav-link" id="logout" href="/arawanghelpdesk/index.php?lp=true">Logout</a></li>';
            
        }
        else{
            echo '<li class="nav-item"><a class="nav-link" id="login" href="/arawanghelpdesk/login.php">Login</a></li>';
            echo '<li class="nav-item" ><a class="nav-link" id="register" href="/arawanghelpdesk/register.php">Register</a></li>';
            
            
        }
        ?>
    </ul>
</nav>
</html>

<?php 

check_active($_SESSION['current']);



?>
