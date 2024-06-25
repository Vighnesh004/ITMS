
<?php
include("config.php");
$u_id = $_SESSION['u_id'];

if (!$_SESSION['u_id']) {
    header("Location:index.php");
    exit(); // Add exit to stop further execution
}

$sel_qry = $conn->query("SELECT * FROM tbl_users WHERE u_id='$u_id'");
$sel_qry_arr = $sel_qry->fetch();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Profile</title>
    <link href="css/bootstrap.css" rel="stylesheet">
    <style>
        .col.mb-3 {
            margin-bottom: 75px; /* Increase margin size */
        }
    </style>
</head>
<body style="background:lightblue">
    <?php include("header.php"); ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <h2 class="text-center m-2">My Profile</h2>
                <div class="card p-3">
                    <!-- Display user's profile information -->
                    <form action="" method="post">
                        <div class="row">
                            <div class="col mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Name</label>
                                <input type="text" class="form-control" id="name" name="name" value="<?=$sel_qry_arr['u_name'];?>">
                            </div>
                            <div class="col mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Email address</label>
                                <input type="email" class="form-control" id="email" name="email" value="<?=$sel_qry_arr['u_email'];?>">
                            </div>
                        </div>
 <div class="row">
<div class="col mb-3">                           
 <label for="exampleFormControlInput1" class="form-label">Mobile Number</label>
  <input type="number" class="form-control" id="mobile" name="mobile" value="<?=$sel_qry_arr['u_mobile'];?>" >

 </div>
 <div class="col mb-3">
 <label for="exampleFormControlInput1" class="form-label">DOB</label>
  <input type="text" class="form-control" id="dob" name="dob" value="<?=$sel_qry_arr['u_dob'];?>">
 </div>
      <div class="col mb-3">
      <label for="exampleFormControlInput1" class="form-label">Aadhar No</label>
      <input type="text" class="form-control" id="aadhar" name="aadhar" value="<?=$sel_qry_arr['u_aadhar'];?>">
      </div>
    </div>

<!--New Row -->
<div class="row">
        <div class="col mb-3">
            <label for="exampleFormControlInput1" class="form-label">gender</label>
            <input type="text" class="form-control" id="gender" name="gender" value="<?=$sel_qry_arr['u_gender'];?>">
        </div>
        <div class="col mb-3">
            <label for="exampleFormControlInput1" class="form-label">college</label>
            <input type="text" class="form-control" id="clg" name="clg" value="<?=$sel_qry_arr['college'];?>">
        </div>
</div>
<div class="row">
        <div class="col mb-3">
            <label for="exampleFormControlInput1" class="form-label">proj_title</label>
            <input type="text" class="form-control" id="proj" name="proj" value="<?=$sel_qry_arr['proj_title'];?>">
        </div>
        <div class="col mb-3">
            <label for="exampleFormControlInput1" class="form-label">trg_dur</label>
            <input type="text" class="form-control" id="trg" name="trg" value="<?=$sel_qry_arr['trg_dur'];?>">
        </div>
        <div class="col mb-3">
            <label for="exampleFormControlInput1" class="form-label">gui_name</label>
            <input type="text" class="form-control" id="gui" name="gui" value="<?=$sel_qry_arr['gui_name'];?>">
        </div>
</div>
<div class="row">
        <div class="col mb-3">
            <label for="exampleFormControlInput1" class="form-label">nation</label>
            <input type="text" class="form-control" id="nat" name="nat" value="<?=$sel_qry_arr['nation'];?>">
        </div>
        <div class="col mb-3">
            <label for="exampleFormControlInput1" class="form-label">ref_by</label>
            <input type="text" class="form-control" id="ref" name="ref" value="<?=$sel_qry_arr['ref_by'];?>">
        </div>
</div>
<div class="text-center">
                            <button name="update" class="btn btn-warning">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <?php include("footer.php"); ?>
    <script src="js/bootstrap.bundle.js"></script>
</body>
</html>