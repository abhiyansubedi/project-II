<?php
include 'header.php';
include 'ft.php';
include 'db.php';
?>

<?php

if (isset($_GET['id'])) {


    $id = $_GET['id'];
    $genrename = $_GET['genrename'];
    $genreid = $_GET['genreid'];
    if (isset($_POST['submit'])) {

        $gname = $_POST['gname'];
        $gid = $_POST['gid'];
        $pid = $_POST['pid'];


        $query = "UPDATE `genre` SET `id`=$pid,`genre_id`=$gid,`genre_name`='$gname' WHERE id=$id";
        $run = mysqli_query($con, $query);
        if ($run) {

            header("Location: genre.php");

        } else {
            header("Location:editgenre.php");
        }

    }

} else {
    header('location:genre.php');
}
?>

<div class="container">
    <div class="head" style="text-align:center;padding:10 px 0px 10px 0px;">
        <h1>Edit Genre</h1>
        <form action="#" method="post">
            <div class="form-row">
                <div class="col-7">
                    <small>Genre name </small>
                    <input type="text" class="form-control" name="gname" value="<?php echo $genrename ?>"
                        placeholder="Genre name">
                </div>
                <div class="col">
                    <small>Genre id </small>

                    <input type="number" class="form-control" name="gid" value="<?php echo $genreid; ?>"
                        placeholder="Genre id">
                </div>
                <div class="col">
                    <small>Primary ID </small>

                    <input type="number" class="form-control" name="pid" value="<?php echo $id; ?>"
                        placeholder="primary id">
                </div>
            </div>
        </form>
    </div><br><br>
    <input type="submit" class="btn btn-outline-success btn-lg" name="submit">
</div>