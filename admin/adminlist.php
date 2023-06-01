<?php
include 'header.php';
include 'ft.php';
include 'db.php';
?>

<div class="container">
    <div class="head" style="padding-top: 10px; padding-bottom:10px; text-align: center;">
        <h1> Admins of movieflix </h1>
        <a href="registeradmin.php" class="btn btn-primary " style="margin-left:85%">Add New Admin</a><br><br>

        <table class="table table-striped">
            <thead>

                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Username</th>
                    <th scope="col">password</th>
                    <th scope="col">Email</th>
                    <th scope="col">CURD</th>
                </tr>
            </thead>
            <?php

            $query = "SELECT * from admin";
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
                                <?php echo $row['username']; ?>
                            </td>
                            <td>
                                <pre> Password Encrypted</pre>
                            </td>
                            <td>
                                <?php echo $row['email']; ?>
                            </td>
                            <td><a class="btn btn-danger" href="deleteadmin.php?usernameid=<?php echo $row['id']; ?>">Delete</a>
                                <a class="btn btn-outline-success" href="editadmin.php?id=<?php echo $row['id']; ?>">Edit </a>
                            </td>
                        </tr>
                        <?php
                }

            }
            ?>
            </tbody>
        </table>
    </div>