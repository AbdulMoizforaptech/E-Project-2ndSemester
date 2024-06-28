<?php
include("config.php");
session_start();

if (!isset($_SESSION['admin_session'])){
  echo "<script>window.location.href= 'login.php'</script>";
} 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedbacks</title>
</head>
<body>
    <?php
    include_once 'include/header.php';
    include_once 'include/navbar.php';
    include_once 'include/sidebar.php';
    ?>

    <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">List of Feedbacks</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">  
                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                <li class="breadcrumb-item"><a href="profile.php">Profile</a></li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="card-body">
            <table id="example2" class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Patient Name</th>
                        <th>Message</th>
                        <th>Status</th>
                        <th>Action</th>
                        <th>Record Time</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $query = "SELECT tbl_patient.name AS 'p', tbl_feedback.* FROM tbl_feedback INNER JOIN tbl_patient ON tbl_feedback.p_id = tbl_patient.id";
                    $result = mysqli_query($conn, $query);
                    foreach ($result as $row){
                        echo
                        "<tr>
                            <td>$row[id]</td>
                            <td>$row[p]</td>
                            <td>$row[message]</td>
                            <td>$row[status]</td>
                            <td>"; if ($row['status'] == "hide"){
                                echo "<a href = 'include/feedback_status_show.php?id=$row[id]'>Show</a>";
                            } else {
                                echo "<a href = 'include/feedback_status_hide.php?id=$row[id]'>Hide</a>";
                            }
                            "</td>
                            <td>$row[created_at]</td>
                        </tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>  <!-- card-body -->
                    
                    
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


    <?php
    include_once 'include/footer.php';
    ?>
</body>
</html>