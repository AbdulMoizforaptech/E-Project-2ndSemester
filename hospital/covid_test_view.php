<?php
include("../admin/config.php");
session_start();

if (!isset($_SESSION['hospital_session'])){
  echo "<script>window.location.href= 'login.php'</script>";
} 

$query = "SELECT tbl_patient.name AS 'p', tbl_hospital.name AS 'h', tbl_test.* FROM tbl_test INNER JOIN tbl_patient ON tbl_test.p_id = tbl_patient.id INNER JOIN tbl_hospital ON tbl_test.h_id = tbl_hospital.id WHERE tbl_test.id = $_GET[id]";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);
?>
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
                            <label for="pname">Patient Name</label>
                            <input type="text" class="form-control" id="pname" name="pname" value="<?php echo $row['id']; ?>" required readonly>
                        </div>
                        <div class="form-group">
                            <label for="hname">Hospital Name</label>
                            <input type="text" class="form-control" id="hname" name="hname" required value="<?php echo $row['h']; ?>" readonly>
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