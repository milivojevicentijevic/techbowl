<?php
    if(isset($_POST['submit']) && $_POST['submit'] != '') {

        require_once 'includes/db.php';

        $first_name = (!empty($_POST['first_name'])) ? $_POST['first_name'] : '';
        $last_name = (!empty($_POST['last_name'])) ? $_POST['last_name'] : '';
        $gender = (!empty($_POST['gender'])) ? $_POST['gender'] : '';
        $email = (!empty($_POST['email'])) ? $_POST['email'] : '';
        $course = (!empty($_POST['course'])) ? $_POST['course'] : '';

        $sql = "INSERT INTO students (first_name, last_name, email, gender, course) VALUES ('$first_name','$last_name','$email','$gender','$course')";
        $result = mysqli_query($conn, $sql);
        if ($result) {
            echo "Record has been saved"; die;
        }

    }
?>

<!DOCTYPE html>
<html lang="en">
<?php include 'partial/head.php'; ?>
<body>
    <?php include 'partial/nav.php'; ?>
    <div class="container">
        <div class="formdiv">
            <div class="info"></div>
            <form action="" method="POST">
                <div class="form-group row mb-3">
                    <label for="first_name" class="col-sm-3 col-form-label">First Name</label>
                    <div class="col-sm-7">
                        <input type="text" name="first_name" class="form-control" id="first_name" placeholder="First Name">
                    </div>
                </div>
                <div class="form-group row mb-3">
                    <label for="last_name" class="col-sm-3 col-form-label">Last Name</label>
                    <div class="col-sm-7">
                        <input type="text" name="last_name" class="form-control" id="last_name" placeholder="Last Name">
                    </div>
                </div>
                <div class="form-group row mb-3">
                    <label for="gender" class="col-sm-3 col-form-label">Gender</label>
                    <div class="col-sm-7">
                        <select class="form-select" id="gender" name="gender" >
                            <option selected>Select Gender</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row mb-3">
                    <label for="email" class="col-sm-3 col-form-label">Email</label>
                    <div class="col-sm-7">
                        <input type="email" name="email" class="form-control" id="email" placeholder="Email">
                    </div>
                </div>
                <div class="form-group row mb-3">
                    <label for="course" class="col-sm-3 col-form-label">Course</label>
                    <div class="col-sm-7">
                        <select class="form-select" id="course" name="course">
                            <option selected>Select Course</option>
                            <option value="BCA">BCA</option>
                            <option value="MCA">MCA</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row mb-3">
                    <div class="col-sm-7">
                        <input type="submit" name="submit" class="btn btn-success" value="SUBMIT">
                    </div>
                </div>
            </form>
        </div>
    </div>  
</body>
</html>