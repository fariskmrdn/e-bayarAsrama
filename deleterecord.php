<?php
include 'config.php';
$get_id = $_GET['id'];
$delete = mysqli_query($connect, "DELETE FROM pelajar WHERE id='$get_id'");
header("Location: warden_dashboard.php");
exit;
?>