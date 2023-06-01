<?php
include 'header.php';
include 'ft.php';
include 'db.php';
?>

<div class="container">
    <div class="head">

        <div class="jumbotron">
            <h1 class="display-4">Add Genre</h1>
            <p class="lead">Add genre and their ID </p>
            <hr class="my-4">
            <form action="addgenre.php" method="post">
                <div class="form-row">
                    <div class="col">
                        <input type="text" name="genre_name" class="form-control" placeholder="genre_name ">
                    </div>
                    <div class="col">
                        <input type="text" name="genre_id" class="form-control" placeholder="genre_id">
                    </div>
                </div>
                <br><br>
                <button class="btn btn-primary btn-lg" name="submit" href="#" role="button">Add Genre</button>

            </form>
        </div>
    </div>
</div>

<?php

if (isset($_POST['submit'])) {
    $genre_name = $_POST['genre_name'];
    $genre_id = $_POST['genre_id'];

    $query = "INSERT INTO `genre`(`genre_id`, `genre_name`) VALUES ($genre_id,'$genre_name')";

    $run = mysqli_query($con, $query);
    if ($run) {
        echo "<script>alert('(Genre added successfully)');window.location.href='genre.php';</script>";
    } else {
        echo "<script>alert('There's a problem in adding a genre');window.location.href='addgenre.php';</script>";

    }
}


?>