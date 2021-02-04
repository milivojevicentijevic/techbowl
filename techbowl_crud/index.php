<?php
    require_once 'includes/db.php';
    $sql = "SELECT * FROM students";
    $results = mysqli_query($conn, $sql);
    $records = mysqli_num_rows($results);
?>

<!DOCTYPE html>
<html lang="en">
<?php include 'partial/head.php'; ?>
<body>
    <?php include 'partial/nav.php'; ?>
    <div class="container">
        <div class="info"></div>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Gender</th>
                    <th scope="col">Email</th>
                    <th scope="col">Course</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    if (!empty($records)) {
                        while ($row = mysqli_fetch_assoc($results)) {
                            ?>
                                <tr>
                                    <th scope="row"><?php echo $row['id']; ?></th>
                                    <td><?php echo $row['first_name'].' '.$row['last_name']; ?></td>
                                    <td><?php echo $row['gender']; ?></td>
                                    <td><?php echo $row['email']; ?></td>
                                    <td><?php echo $row['course']; ?></td>
                                    <td>
                                        <a href="/" class="btn btn-primary">EDIT</a>
                                        <a href="/" class="btn btn-danger">DELETE</a>
                                    </td>
                                </tr>
                            <?php
                        }
                    }
                ?>
            </tbody>
        </table>
    </div>  
</body>
</html>