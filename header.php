<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="dashboard.php" style="color:#A52A2A;font-weight:bold">Inplant Training Management System</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="btn btn-primary" aria-current="page" href="dashboard.php">Dashboard</a>
        </li>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="btn btn-info" aria-current="page" href="all_profile.php">SHOW ALL</a>
          </li>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="btn btn-success" aria-current="page" href="attendance.php">ATTENDANCE</a>
          </li>
        <?php if($_SESSION['u_type']==2){ ?>
        <li class="nav-item">
          <a class="nav-link" href="users.php">Users</a>
        </li>
        <?php } ?>
        <li class="nav-item">
          <a class="btn btn-dark" href="myprofile.php">My Profile</a>
        </li>
        
      </ul>

      <ul class="navbar-nav  mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="dashboard.php"><?=$_SESSION['u_name']?></a>
        </li>
        <li class="nav-item">
          <a class=" btn btn-danger" href="logout.php">Logout</a>
        </li>
        
        
      </ul>
      
      </div>
  </div>
    </div>
  </div>
</nav>