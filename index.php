<?php
include 'api/base.php';
$sql = "Select * from users";
$data = get_data($sql);

foreach(@$data as $user){
    echo $user->name."<br>";
}

include 'api/it.php';
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
</body>
</html>