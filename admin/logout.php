<?php
session_start();
unset($_SESSION['admin_session']);
echo "<script>window.location.href= 'login.php'</script>";
?>