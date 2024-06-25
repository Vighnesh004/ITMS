<?php
include("config.php");
$u_id=$_SESSION['u_id'];

if(!$_SESSION['u_id'])
{
    header("Location:index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blank</title>
    <link href="css/bootstrap.css" rel="stylesheet">
</head>
<body style="background:lightblue">
    <?php include("header.php");?>
    <div class="text-center">
        <h1>WELCOME TO  INPLANT TRAINING MANAGEMENT SYSTEM</h1>
        <h2><?=$_SESSION['u_name'];?></h2>
        <a href="myprofile.php" class="btn btn-success">Edit Profile</a>
    </div>
    <?php include("footer.php");?>

<script src="js/bootstrap.bundle.js"></script>
</body>
</html>