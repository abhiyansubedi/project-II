<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="\CSS\signup.css">

</head>

<body>
    <form action="signup.php" method="post">
        <h2> Register </h2>
        <label>User name</label>
        <input type="text" name="uname" placeholder="Username"><br>

        <label>Password</label>
        <input type="Password" name="password" placeholder="Password"><br>

        <label>Re-type password</label>
        <input type="Password" name="password" placeholder="Rpassword"><br>

        <button type="submit">Register</button>
        <a href="login.php">Sign in </a>
</body>

</html>