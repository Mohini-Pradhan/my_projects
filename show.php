<?php    
    if(isset($_POST["submit"]))
    {
        $name = $_POST["name"] ?? "";
        $email = $_POST["email"] ?? "";
        $mobile = $_POST["mobile"] ?? "";
        $age = $_POST["age"] ?? "";
        $gender = $_POST["gender"] ?? "";
        $course = $_POST["course"] ?? "";
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Details</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
    <div class="row justify-content-center">

        <div class="col-md-6">

            <div class="card shadow">
                <div class="card-header bg-primary text-white text-center" style="background: linear-gradient(to right, #4e73df, #1cc88a);">
                    <h3>Student Details</h3>
                </div>

                <div class="card-body">

                    <table class="table table-bordered table-hover">

                        <tr>
                            <th>Full Name</th>
                            <td><?php echo $name; ?></td>
                        </tr>

                        <tr>
                            <th>Email</th>
                            <td><?php echo $email; ?></td>
                        </tr>

                        <tr>
                            <th>Mobile</th>
                            <td><?php echo $mobile; ?></td>
                        </tr>

                        <tr>
                            <th>Age</th>
                            <td><?php echo $age; ?></td>
                        </tr>

                        <tr>
                            <th>Gender</th>
                            <td><?php echo $gender; ?></td>
                        </tr>

                        <tr>
                            <th>Course</th>
                            <td><?php echo $course; ?></td>
                        </tr>

                    </table>

                </div>

                <div class="card-footer text-center">
                    <a href="index.php" class="btn btn-success" style="background: linear-gradient(to right, #4e73df, #1cc88a);">
                        Add Another Student
                    </a>
                </div>

            </div>

        </div>

    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>