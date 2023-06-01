<?php
include 'header.php';
include 'ft.php';
include 'db.php';
?>

<div class="container">
    <div class="head" style="text-align:center;padding:10px 0px 10px 0px">
        <h1>Genre </h1>
    </div>
    <a href="addgenre.php" class="btn btn-warning text-light " style="margin-left:85%">Add Genre</a>
    <hr>
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Genre ID <small>Foreign Key</small></th>
                <th scope="col">Genre </th>
                <th scope="col">Number of post</th>
                <th scope="col">CURD</th>
            </tr>
        </thead>
        <?php
        $query = "SELECT * FROM genre";
        $run = mysqli_query($con, $query);
        if ($run) {
            while ($row = mysqli_fetch_assoc($run)) {
                ?>


                <tbody>
                    <tr>
                        <th scope="row">
                            <?php echo $row['id']; ?>
                        </th>
                        <td>
                            <?php echo $row['genre_id']; ?>
                        </td>
                        <td>
                            <?php echo $row['genre_name']; ?>
                        </td>
                        <td>
                            <?php echo $row['post']; ?>
                        </td>
                        <td><a href="deletegenre.php?deleteid=<?php echo $row['id']; ?>" class="btn btn-danger">Delete</a> <a
                                class="btn btn-outline-primary"
                                href="editgenre.php?id=<?php echo $row['id']; ?>&genreid=<?php echo $row['genre_id']; ?> &genrename=<?php echo $row['genre_name']; ?>">Edit
                            </a>
                        </td>
                    </tr>

                </tbody>
                <?php



            }
        }
        ?>
    </table>
</div>