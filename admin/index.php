<?php
session_start();
if ($_SESSION['loginsuccessful']) {
} else {
    header('location:login.php');
}

include 'db.php';
include 'header.php';
?>
<h1>index</h1>
<a href="logout.php">Logout</a>