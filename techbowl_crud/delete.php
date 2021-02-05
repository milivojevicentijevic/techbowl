<?php

require_once 'includes/db.php';

if (!empty($_GET['id'])) {
    $student_id = $_GET['id'];
    $sql = "DELETE FROM students WHERE id='$student_id'";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        header('location: index.php?msg=del');
    }
}
