<?php
include("../admin/config.php");
session_start();

if (!isset($_SESSION['hospital_session'])){
  echo "<script>window.location.href= 'login.php'</script>";
} 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Covid Test Applications</title>
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
            <h1 class="m-0">List of Covid Test Applications</h1>
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
                        <th>Patient Name</th>
                        <th>Date</th>
                        <th>Time</th>
                        <th>Result</th>
                        <th>Record Time</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $query = "SELECT tbl_patient.name AS 'p', tbl_hospital.name AS 'h', tbl_test.* FROM tbl_test INNER JOIN tbl_patient ON tbl_test.p_id = tbl_patient.id INNER JOIN tbl_hospital ON tbl_test.h_id = tbl_hospital.id WHERE tbl_hospital.id = $_SESSION[hospital_session]";
                    $result = mysqli_query($conn, $query);
                    foreach ($result as $row){?>
                        
                        <tr>
                            <td><?php echo "$row[p]";?></td>
                            <td>
                            <input type="date" class="form-control" id="date" name="date" required min="<?php echo date('Y-m-d', strtotime("+1 days")); ?>">
                            </td>
                            <td>
                            <select class="custom-select" name="time" required>
                                <option value="" selected hidden>Select Time</option>
                                <option>9am-11am</option>
                                <option>11am-1pm</option>
                                <option>1pm-3pm</option>
                                <option>3pm-5pm</option>
                                <option>5pm-7pm</option>
                                <option>7pm-9pm</option>
                            </select>
                            </td>
                            <td><?php echo "$row[result]";?></td>
                            <td><?php echo "$row[created_at]";?></td>";
                            <?php if ($row["result"] == "process"){?>
                              <td>
                              <button type="submit" name="submit" href = "include/covid_test_view.php?id=$row[id]">Submit</a>
                            </td>
                            <?php } ?>
                        </tr>
                    <?php }
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