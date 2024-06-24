<?php
include("config.php");

$query = "SELECT * FROM tbl_admin WHERE id = $_SESSION[admin_session]";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);
?>
<!-- Main Sidebar Container -->
 <aside class="main-sidebar elevation-4" style="background-color: rgba(111, 66, 193, 0.1);">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="assests/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?php echo $row['image'] ?>" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="profile.php" class="d-block"><?php echo $row['name'] ?></a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="index.php" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>Dashboard</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="hospital.php" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>Hospital</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="patient.php" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>Patient</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="appointment.php" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>Appointments</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="covid_test.php" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>Covid Test</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>Feedback</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="../index.php" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>Website</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="logout.php" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>Sign Out</p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>