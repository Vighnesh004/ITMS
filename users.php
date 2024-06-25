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
    <link href="DataTables/datatables.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/buttons/2.4.2/css/buttons.dataTables.min.css" rel="stylesheet">
</head>
<body>
    <?php include("header.php");?>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
            <table class="table" id="mytbl">
  <thead>
    <tr>
     
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Mobile</th>
      <th scope="col">Gender</th>
      <th scope="col">Dob</th>
      <th scope="col">Date</th>
      <th scope="col">Type</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  
</table>
            </div>
        </div>
    </div>
    <?php include("footer.php");?>
<script src="js/jquery-3.7.1.min.js"></script>
<script src="js/bootstrap.bundle.js"></script>
<script src="DataTables/datatables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.4.2/js/dataTables.buttons.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.print.min.js"></script>
<script>
   new DataTable('#mytbl', {
    ajax: 'fetch-user.php',
    processing: true,
    serverSide: true,
    dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
});
</script>
</body>
</html>