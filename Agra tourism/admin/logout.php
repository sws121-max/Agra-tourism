<?php
session_start();
$_SESSION['users'];
session_unset();
session_destroy();

echo"<script>window.location.href='login.php'</script>";

?>