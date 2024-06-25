<?php
include("config.php");
session_start(); // Start the session
$u_id=$_SESSION['u_id'];

if(!$_SESSION['u_id'])
{
    header("Location:index.php");
}

// Fetch data from the database
$sel_qry=$conn->query("SELECT u_name,u_email,u_mobile,u_dob,u_aadhar,u_gender,college,proj_title,trg_dur,gui_name,nation,ref_by FROM tbl_users");

// Check if query executed successfully
if($sel_qry)
{
    echo "Data will be shown below"; // This line is not necessary, you can remove it
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Profile</title>
    <link href="css/bootstrap.css" rel="stylesheet">
    <style>
        .table-container {
            font-family: Arial, Helvetica, sans-serif;
            width: 100%;
        }

        .table-container table {
            border-collapse: collapse;
            width: 100%;
        }

        .table-container th, .table-container td {
            border: 1px solid #ddd;
            padding: 8px;
        }

        .table-container th {
            background-color:#A52A2A;
            color: white;
            text-align: left;
            padding-top: 12px;
            padding-bottom: 12px;
        }

        .table-container tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        .table-container tr:hover {
            background-color: #ddd;
        }
    </style>
</head>
<body>
    <body style="background:#7FFFD4">
    <?php include("header.php");?>
    <h1>All Implant Training Records</h1>
    <div class="table-container">
        <table>
            <thead>
                <tr>
                    <th>Sl. No.</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Mobile</th>
                    <th>DOB</th>
                    <th>Aadhar</th>
                    <th>Gender</th>
                    <th>College</th>
                    <th>Project Title</th>
                    <th>Training Duration</th>
                    <th>Guide Name</th>
                    <th>Nation</th>
                    <th>Referred by</th>
                </tr>
            </thead>
    <tbody>
        <?php
        $counter = 1; // Initialize counter for serial number
        foreach ($sel_qry as $field) {
            echo "<tr>";
            echo "<td>".$counter."</td>"; // Display serial number
            echo "<td>".$field['u_name']."</td>"; // Display name
            echo "<td>".$field['u_email']."</td>"; // Display email
            echo "<td>".$field['u_mobile']."</td>"; // Display mobile
            echo "<td>".$field['u_dob']."</td>"; // Display DOB
            echo "<td>".$field['u_aadhar']."</td>"; // Display Aadhar
            echo "<td>".$field['u_gender']."</td>"; // Display gender
            echo "<td>".$field['college']."</td>"; // Display college
            echo "<td>".$field['proj_title']."</td>"; // Display project title
            echo "<td>".$field['trg_dur']."</td>"; // Display training duration
            echo "<td>".$field['gui_name']."</td>"; // Display guide name
            echo "<td>".$field['nation']."</td>"; // Display nation
            echo "<td>".$field['ref_by']."</td>"; // Display referred by
            echo "</tr>";
            $counter++; // Increment counter for next row
        }
        ?>
    </tbody>
</table>

    <?php include("footer.php");?>
<script src="js/bootstrap.bundle.js"></script>
</body>
</html>
