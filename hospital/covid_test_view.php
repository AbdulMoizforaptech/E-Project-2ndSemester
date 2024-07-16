<?php
include("../admin/config.php");
session_start();

if (!isset($_SESSION['hospital_session'])){
  echo "<script>window.location.href= 'login.php'</script>";
} 

$query = "SELECT tbl_patient.name as p, tbl_hospital.name as h, tbl_test.* FROM tbl_test INNER JOIN tbl_patient ON tbl_test.p_id = tbl_patient.id INNER JOIN tbl_hospital ON tbl_test.h_id = tbl_hospital.id WHERE tbl_test.id = '$_GET[id]'";
$result = mysqli_query($conn, $query);
// $row= mysqli_fetch_row($result);
$fetch= mysqli_fetch_array($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Covid Test Application Details</title>
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
            <h1 class="m-0">Covid Test Application Details</h1>
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
      <div class="maincontent">
            <div class="row">
                <div class="col-md-6">
                    <div class="applicationupdate" style=" padding-left:50px; max-width:600px; width:100%;">
                        <form method="POST">
                        <div class="form-group">
                            <input type="text" class="form-control" id="id" name="id" required value="<?php echo $fetch["id"]; ?>" hidden>
                        </div>
                        <div class="form-group">
                            <label for="pname">Patient Name</label>
                            <input type="text" class="form-control" id="pname" name="pname" required value="<?php echo $fetch["p"]; ?>" readonly>
                        </div>
                        <div class="form-group">
                            <label for="date">Date</label>
                            <input type="date" class="form-control" id="date" name="date" required value="<?php echo isset($fetch["date"]) ? $fetch["date"] : ''; ?>" min="<?php echo date('Y-m-d', strtotime("+1 days")); ?>">
                        </div>
                        <div class="form-group">
                            <label for="time">Select the time</label>
                            <select class="custom-select" name="time" required>
                                <option value="" selected hidden><?php echo isset($fetch["time"]) ? $fetch["time"] : 'Select Time'; ?></option>
                                <option>9am-11am</option>
                                <option>11am-1pm</option>
                                <option>1pm-3pm</option>
                                <option>3pm-5pm</option>
                                <option>5pm-7pm</option>
                                <option>7pm-9pm</option>
                            </select>
                        </div>  <!-- form-group -->
                        <div class="form-group">
                            <label for="result">Covid Result</label>
                            <input type="text" class="form-control" id="result" name="result" required value="<?php echo $fetch["result"]; ?>" readonly>
                        </div>
                        <button type="submit" class="btn btn-primary" name="update">Update</button>
                        </form>
                    </div>  <!-- applicationupdate -->
                    <?php
                    // if (isset($_POST['update'])){
                    //     $name = $_POST['name'];
                    //     $email = $_POST['email'];
                    //     $password = $_POST['password'];

                    //     $query = "UPDATE tbl_admin SET name = '$name', email = '$email', password = '$password' WHERE id = $_SESSION[admin_session]";
                    //     $result = mysqli_query($conn, $query);

                    //     if ($result){
                    //         echo
                    //         "<script>
                    //         alert('Profile updated successfully');
                    //         window.location.href = 'profile.php';
                    //         </script>";
                    //     }
                    // }
                    ?>
                </div>  <!-- col -->

            </div>  <!-- row -->
        </div>  <!-- maincontent -->
                    
                    
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