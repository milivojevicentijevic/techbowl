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
                            <option value="Female">female</option>
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
                        <button type="submit" class="btn btn-success">SUBMIT</button>
                    </div>
                </div>
            </form>
        </div>
    </div>  
</body>
</html>