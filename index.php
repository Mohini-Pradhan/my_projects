<?php
    $nameError = "";
    $emailError = "";
    $mobileError = "";
    $ageError = "";
    $genderError = "";
    $courseError = "";

    if(isset($_POST["submit"])){

        $name = $_POST["name"] ?? "";
        $email = $_POST["email"] ?? "";
        $mobile = $_POST["mobile"] ?? "";
        $age = $_POST["age"] ?? "";
        $gender = $_POST["gender"] ?? "";
        $course = $_POST["course"] ?? "";


        // All fields required
        if(empty($name)){
            $nameError = "Name is required";
        }

        if(empty($email)){
            $emailError = "Email is required";
        }
        elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $emailError = "Enter valid email address";
        }


        if(empty($mobile)){
            $mobileError = "Mobile number is required";
        }
        elseif(!preg_match("/^[0-9]{10}$/", $mobile)){
            $mobileError = "Mobile number must be exactly 10 digits";
        }


        if(empty($age)){
            $ageError = "Age is required";
        }
        elseif($age < 18 || $age > 35){
            $ageError = "Age must be between 18 and 35";
        }


        if(empty($gender)){
            $genderError = "Please select gender";
        }


        if(empty($course)){
            $courseError = "Please select course";
        }


        // No error then go show page
        if(
            $nameError == "" &&
            $emailError == "" &&
            $mobileError == "" &&
            $ageError == "" &&
            $genderError == "" &&
            $courseError == ""
        ){

            header("Location: show.php");
            exit();

        }

    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
    <div class="row justify-content-center">

        <div class="col-md-6">

            <div class="card shadow">
                <div class="card-header text-white text-center py-3" style="background: linear-gradient(to right, #4e73df, #1cc88a);">
                    <h3>Add Student Details</h3>
                </div>

                <div class="card-body">

                    <form action="show.php" method="POST">

                        <div class="mb-3">
                            <label class="form-label">Full Name</label>
                            <input type="text" name="name" class="form-control" placeholder="Enter your name">
                            <small class="text-danger">
                                <?php echo $nameError; ?>
                            </small>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Email</label>
                            <input type="email" name="email" class="form-control" placeholder="Enter your email">
                            <small class="text-danger">
                                <?php echo $emailError; ?>
                            </small>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Mobile</label>
                            <input type="text" name="mobile" class="form-control" placeholder="Enter mobile number">
                            <small class="text-danger">
                                <?php echo $mobileError; ?>
                            </small>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Age</label>
                            <input type="number" name="age" class="form-control" placeholder="Enter Age">
                            <small class="text-danger">
                                <?php echo $ageError; ?>
                            </small>
                        </div>

                        <div class="mb-3">
                            <label class="form-label d-block">Gender</label>

                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="gender" value="Male">
                                <label class="form-check-label">Male</label>
                            </div>

                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="gender" value="Female">
                                <label class="form-check-label">Female</label>
                            </div>
                            <small class="text-danger">
                                <?php echo $genderError; ?>
                            </small>                                                                            
                        </div>


                        <div class="mb-3">
                            <label class="form-label">Course</label>

                            <select name="course" class="form-select">
                                <option value="">Select Course</option>
                                <option value="PHP">PHP</option>
                                <option value="Laravel">Laravel</option>
                                <option value="JavaScript">JavaScript</option>
                                <option value="WordPress">WordPress</option>
                                <option value="Python">Python</option>
                                <option value="JAVA">JAVA</option>
                            </select>
                            <small class="text-danger">
                                <?php echo $courseError; ?>
                            </small>
                        </div>

                        <div class="d-grid" >
                            <button type="submit" name="submit" class="btn btn-success" style="background: linear-gradient(to right, #4e73df, #1cc88a);">
                                Submit
                            </button>
                        </div>

                    </form>

                </div>

                <div class="card-footer text-center">
                    Already have an account?
                    <a href="">Login Here</a>
                </div>

            </div>

        </div>

    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>

