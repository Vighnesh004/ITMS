<?php
include("config.php");
if($_SESSION['u_id'])
{
     header("Location:dashboard.php");
}
if(isset($_POST['submit']))
{
    $email=$_POST['email'];
    $pwd=$_POST['pwd'];
    if($email!='' && $pwd!='')
    {
        $pwd=md5($pwd); // encryption method
        $lg_qry=$conn->query("select * from tbl_users where u_email='$email' and u_pwd='$pwd'");
        if($lg_qry->rowCount()==1)
        {
            $lg_qry_arr=$lg_qry->fetch();
            $_SESSION['u_id']=$lg_qry_arr['u_id'];
            $_SESSION['u_name']=$lg_qry_arr['u_name'];
            $_SESSION['u_type']=$lg_qry_arr['u_type'];
            ?>
            <script>alert("Login success!!");window.location="dashboard.php";</script>
            <?php
            //header("Location:dashboard.php");
        }
        else{
            echo "Invalid Email or Password";
        }
    }
    else
    {
        echo "Fill every fields";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="css/bootstrap.css" rel="stylesheet">
    <style>
        /* Custom CSS for centering the login form */
        .center-div {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }
    </style>
</head>
<body style="background:lightblue">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 offset-sm-3">
                <div class="card p-3 center-div"> <!-- Added center-div class here -->
                    <h1 class="text-center">LOGIN TO INPLANT TRAINING MANAGEMENT SYSTEM</h1>
                    <form method="post">
                        <div class="mb-3"> 
                            <label for="exampleFormControlInput1" class="form-label">Email</label>
                            <input type="email" class="form-control" id="name" name="email" placeholder="Enter Email" value="" required>
                        </div>
                        <div class="mb-3"> 
                            <label for="exampleFormControlInput1" class="form-label">Password</label>
                            <input type="password" class="form-control" id="name" name="pwd" placeholder="Enter Your Password" required>
                        </div>
                        <div class="text-center">
                            <button class="mt-2 btn btn-primary" type="submit" name="submit">Login</button>
                            <br>
                            <a href="register.php" style="font-weight:bold"> Create an account </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="js/bootstrap.bundle.js"></script>
</body>
</html>
