<?php
session_start();

include 'ft.php';
include_once 'db.php';

?>

<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <!-- jQuery library -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />


</head>
<nav class="navbar navbar-expand-sm bg-light">

    <a class="navbar-brand" href="#">MovieFlix</a>

    <!-- Links -->
    <ul class="navbar-nav ml-auto ">

        <li class="nav-item">
            <a class="nav-link" href="registeradmin.php">Register</a>
        </li>



    </ul>

</nav>

<div class="container">
    <div class="head" style="text-align: center;">
        <h1>Login to MovieFlix </h1>
    </div>
    <form action="login.php" method="post">

        <div class="form-group">
            <label for="exampleInputEmail1">Email</label>
            <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                placeholder="Enter email">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Username</label>
            <input type="text" name="username" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                placeholder="Enter username">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" name="password" class="form-control" id="exampleInputPassword1"
                placeholder="Password">
        </div>

        <button type="submit" name="submit" class="btn btn-primary">Submit</button><br><br>



</div>




<?php

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = "Select * From admin where email ='$email' and username ='$username'  ";
    $run = mysqli_query($con, $query);

    if (mysqli_num_rows($run) > 0) {
        while ($row = mysqli_fetch_assoc($run)) {
            if (password_verify($password, $row['password'])) {
                $_SESSION['loginsuccessful'] = 1;
                header("Location: index.php");

            }
        }
    } else {
        echo "<script>alert('Wrong id password');</script>";
    }

}
?>