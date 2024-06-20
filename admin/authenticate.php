<?php
session_start();

if (!isset($_SESSION['admin_session'])){
    echo "<script>window.location.href= 'login.php'</script>";
}
?>