<?php
session_start();
include 'header.php';
include 'ft.php';
include 'db.php';
?>
<div class="container">
    <div class="head" style="text-align: center;">
        <h1>Login to MovieFlix </h1>
    </div>
    <form action="login.php" method="post">
        <div class="form-group">
            <label for="exampleInputEmail1">Username</label>
            <input type="text" name="username" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                placeholder="Enter Username">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" name="password" class="form-control" id="exampleInputPassword1"
                placeholder="Password">
        </div>

        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

<?php

if (isset($_POST['submit'])) {
    $user = $_POST['username'];
    $password = $_POST['password'];
    $query = "Select * From admin where username ='$user' and password ='$password' ";
    $run = mysqli_query($con, $query);
    $row = mysqli_num_rows($run);
    if ($row == 1) {
        $_SESSION['loginsuccessful'] = 1;
        echo "<script>alert('Logged in Successfully');</script>";
    } else {
        echo "<script>alert('Wrong id passoword');</script>";
    }

}
?>