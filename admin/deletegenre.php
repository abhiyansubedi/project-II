<?php
include 'db.php';


$id = $_GET['deleteid'];

echo ($id);

$query = "DELETE From `genre` where `id` = $id";

$run = mysqli_query($con, $query);

if ($run) {
    header('location:genre.php');
} else {
    echo "<script>alert('something went wrong'); window.location.href='genre.php';</script>";
}

?>