<?php
session_start();
include('include/config.php');
include('include/checklogin.php');
check_login();
include('include/functions.php');
$msg = "";
if (isset($_POST['add_school'])) {
    global $con;

    $shcode = $_POST['shcode'];

    $schname = $_POST['schname'];

    date_default_timezone_set('Asia/Kolkata');
    $ldate = date('Y-m-d H:i:s');

    $query = "INSERT INTO s_schools (s_code,sch_name,creation_date) VALUES ('$shcode','$schname','$ldate')";

    $sql = mysqli_query($con, $query);

    if ($sql) {
        $msg = "School Details Added Successfully";
    }
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Admin | Manage School</title>
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
                            <p class="text-primary m-0 font-weight-bold">Adding a New School</p>
                        </div>

                        <div class="card-body">
                            <h5 style="color: green; font-size:18px; ">
                                <?php if ($msg) {
                                    echo htmlentities($msg);
                                } ?>
                            </h5>
                            <form role="form" method="post">
                                <div class="form-row">
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="shcode" id="shcode" onBlur="shortCodeAvailability()" placeholder="Short Code" required>                                            
                                            <span id="short-code-status" style="font-size:12px;"></span>
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="schname" id="schname" onBlur="schoolNameAvailability()" placeholder="Enter a School Name" required>                                            
                                            <span id="school-name-status" style="font-size:12px;"></span>
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="form-group">
                                            <button class="btn btn-primary btn-xl form-control bg-gradient-primary" type="submit" name="add_school" id="submit">Add&nbsp;School</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <br>
                <div class="container-fluid">
                    <div class="card shadow">
                        <div class="card-header py-3">
                            <p class="text-primary m-0 font-weight-bold">Schools</p>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive table mt-2" id="dataTable" role="grid" aria-describedby="dataTable_info">
                                <table class="table dataTable my-0 black" id="viewtt">
                                    <thead class="h6 myFont">
                                        <?php displayTableHeadSchoolsAdmin(); ?>
                                    </thead>
                                    <tbody>
                                        <?php displaySchoolsAdmin(); ?>
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
    <script>

        function shortCodeAvailability() {
            
            jQuery.ajax({
                url: "check-shcode-availability.php",
                data: 'shcode=' + $("#shcode").val(),
                type: "POST",
                success: function(data) {
                    $("#short-code-status").html(data);
                },
                error: function() {}
            });
        }

        function schoolNameAvailability() {
            
            jQuery.ajax({
                url: "check-shcode-availability.php",
                data: 'schname=' + $("#schname").val(),
                type: "POST",
                success: function(data) {
                    $("#school-name-status").html(data);
                },
                error: function() {}
            });
        }

    </script>

</body>

</html>