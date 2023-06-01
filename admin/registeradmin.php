<?php
include 'header.php';
include 'ft.php';
include 'db.php';
?>

<!-- registration form -->

<div class="container">
    <div class="head" style="text-align: center;">
        <h1>Register admin for MovieFlix </h1>
    </div>
    <form action="registeradmin.php" method="post">
        <div class="form-group">
            <label for="exampleInputEmail1">EmailAddress</label>
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
    </form>

    <a href="login.php">Sign in</a>

</div>

<?php
if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $hash = password_hash("$password", PASSWORD_BCRYPT);


    $query = "INSERT INTO `admin`( `email`, `username`, `password`) VALUES ('$email','$username','$hash')";
    $run = mysqli_query($con, $query);
    if ($run) {
        echo "<script>alert('Admin added successfully');window.location.href='adminlist.php';</script>";
    } else {
        echo "something happened";
    }

}

?>