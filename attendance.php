<?php
include("config.php");
session_start(); // Start the session
$u_id = $_SESSION['u_id'];
$u_name = $_SESSION['u_name'];
if (!$_SESSION['u_id'] || !$_SESSION['u_name']) {
    header("Location:index.php");
    exit(); // Ensure to stop script execution after redirection
}

// Function to check if attendance is already marked for today
function isAttendanceMarked($conn, $u_id) {
    $today = date('Y-m-d');
    $check_qry = $conn->prepare("SELECT COUNT(*) FROM attendance AS a INNER JOIN tbl_users AS u ON a.user_id = u.u_id WHERE a.user_id = ? AND a.date = ?");
    $check_qry->execute([$u_id, $today]);
    $count = $check_qry->fetchColumn();
    return ($count > 0);
}


if (isset($_POST['mark_attendance'])) {
    $today = date('Y-m-d');
    
    // Fetch user's name
    $sel_qry = $conn->prepare("SELECT u_name FROM tbl_users WHERE u_id = ?");
    $sel_qry->execute([$u_id]);
    $sel_qry_arr = $sel_qry->fetch();
    $user_name = $sel_qry_arr['u_name'];
    
    // Insert attendance with user ID and name
    $insert_qry = $conn->prepare("INSERT INTO attendance (user_id, user_name, date) VALUES (?, ?, ?)");
    $insert_qry->execute([$u_id, $user_name, $today]);
    
    // Redirect to prevent form resubmission
    header("Location: attendance.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Attendance</title>
    <link href="css/bootstrap.css" rel="stylesheet">
    <style>
        /* Custom CSS for the attendance icon */
        .attendance-icon {
            width: 100px; /* Adjust width as needed */
            height: auto;
            margin-bottom: 20px; /* Adjust spacing as needed */
        }
    </style>
</head>
<body style="background:lightblue">
    <?php include("header.php"); ?>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h2 class="text-center m-2">Attendance</h2>
                <!-- Attendance icon -->
                <div class="text-center">
                    <img src="images.png" alt="attendance icon" style="max-width: 400px; height: 250px;">
                </div>
                <div class="card p-3">
                    <form action="" method="post">
                    <?php if (isAttendanceMarked($conn, $u_id)): ?>
                        <div class="alert alert-info" role="alert">
                            Attendance already marked for today by <?= $u_name; ?>.
                        </div>
                    <?php else: ?>
                        <div class="text-center">
                            <button name="mark_attendance" class="btn btn-primary">Mark Attendance</button>
                        </div>
                    <?php endif; ?>
                    <?php if (isset($_POST['mark_attendance']) && !isAttendanceMarked($conn, $u_id)): ?>
                        <div class="alert alert-success" role="alert">
                            Attendance marked successfully for today by <?= $u_name; ?>.
                        </div>
                    <?php endif; ?>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="js/bootstrap.bundle.js"></script>
</body>
</html>




