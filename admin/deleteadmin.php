<?php

include 'db.php';
$id = $_GET['usernameid'];
$query = "DELETE FROM `admin` WHERE id =$id";
$run = mysqli_query($con, $query);
if ($run) {
    echo "<script> alert('Admin Has been deleted!!');window.location.href='adminlist.php'</script>";
} else {
    echo "<script> alert('Admin Has been deleted!!');window.location.href='adminlist.php'</script>";

}
?>