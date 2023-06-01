<?php
session_start();
if ($_SESSION['loginsuccessful']) {
} else {
    header('location:login.php');
}

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Admin</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>
    <!-- A grey horizontal navbar that becomes vertical on small screens -->
    <nav class="navbar navbar-expand-sm bg-light">

        <a class="navbar-brand" href="index.php">MovieFlix</a>



        <!-- Links -->
        <ul class="navbar-nav ml-auto ">
            <li class="nav-item ">
                <a class="nav-link" href="#">Movies</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="genre.php">Genre</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Watchlist</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="adminlist.php">Admin list</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="registeradmin.php">Register</a>
            </li>
            <li class="nav-item">
                <a class="btn btn-outline-danger" href="logout.php">Log out</a>
            </li>



        </ul>

    </nav>