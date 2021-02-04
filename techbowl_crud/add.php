<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CRUD Operations</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <style>
        .formdiv { margin: 0 auto; width: 40%;}
        .info { height: 20px;}
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">CRUD OPERATIONS</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="#" class="nav-link active">List<span class="sr-only"></span></a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">Add New</a>
                </li>
            </ul>
        </div>
    </nav>
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