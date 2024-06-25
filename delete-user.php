<?php
include("config.php");

$id=$_GET['id'];

echo $id;

if($id!='')
{
    $del_qry=$conn->query("delete from tbl_users where u_id='$id'");

    if($del_qry)
    {
        ?>
        <script>
            alert("Deleted Successfully!!!");
            window.location="users.php";
        </script>
        <?php
    } else{
        ?>
        <script>
            alert("Can't Delete!");
            window.location="users.php";
        </script>
        <?php
    }

}
     ?>
