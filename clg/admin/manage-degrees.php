<?php
session_start();
include('include/config.php');
include('include/checklogin.php');
check_login();
include('include/functions.php');
if (isset($_POST['add_degree'])) {

    global $con;

    $sdegree = $_POST['short_degree'];

    $fdegree = $_POST['full_degree'];

    $dtype = $_POST['degree_type'];

    $query = "INSERT INTO degrees (s_degree,deg_fullname,deg_type) VALUES ('$sdegree','$fdegree','$dtype');";

    $sql = mysqli_query($con, $query);

    if ($sql) {
        echo "<script>alert('Degree is added successfully');</script>";
    }
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Admin | Manage Degrees</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/dataTables.bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/css/tablestyle.css">
</head>

<body id="page-top">
    <div id="wrapper">
        <?php include('include/sidebar.php'); ?>

        <div class="d-flex flex-column" id="content-wrapper">
            <div id="content">

                <?php include('include/header.php'); ?>

                <div class="container-fluid">
                    <div class="card shadow">
                        <div class="card-header py-3">
                            <p class="text-primary m-0 font-weight-bold">Adding a New Degree</p>
                        </div>

                        <div class="card-body">
                            <form role="form" class="custom-form" method="post" action="">
                                <div class="form-row">
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <input type="text" name="short_degree" class="form-control" placeholder="Enter Degree">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <input type="text" name="full_degree" class="form-control" placeholder="Full form">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <?php showDegreeTypes("degree_type"); ?>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <button class="btn btn-primary btn-xl form-control bg-gradient-primary" type="submit" name="add_degree">Add&nbsp;Degree</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <a href="manage-degree-types.php">Manage Degree Types</a>
                        </div>
                    </div>
                </div> <br>

                <div class="container-fluid">
                    <div class="card shadow">
                        <div class="card-header py-3">
                            <p class="text-primary m-0 font-weight-bold">Manage Degrees</p>
                        </div>

                        <div class="card-body">
                            <div class="table-responsive table mt-2" id="dataTable" role="grid" aria-describedby="dataTable_info">
                                <table class="table dataTable my-0 black" id="viewdegrees">
                                    <thead class="h6 myFont">
                                        <?php displayTableHeadDegreesAdmin(); ?>
                                    </thead>
                                    <tbody>
                                        <?php displayDegreesAdmin(); ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>


            </div>

            <?php include('include/footer.php'); ?>

        </div><a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.easing.js"></script>
    <script src="assets/js/jquery.dataTables.min.js"></script>
    <script src="assets/js/dataTables.bootstrap.min.js"></script>
    <script src="assets/js/theme.js"></script>
</body>

</html>