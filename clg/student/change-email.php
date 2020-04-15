<?php
session_start();
include('include/config.php');
include('include/checklogin.php');
check_login();
include('include/functions.php');
if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $sql = mysqli_query($con, "Update namelist set email='$email' where id='" . $_SESSION['id'] . "'");
    if ($sql) {
        $msg = "Your email updated Successfully";
    }
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title> Student | Update Email Address</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
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
                            <p class="text-primary m-0 font-weight-bold">Updating Email Address</p>
                        </div>
                        <div class="card-body">
                            <h5 style="color: green; font-size:18px; ">
                                <?php if (isset($msg)) { echo htmlentities($msg); } ?> </h5>
                            <form name="registration" id="updatemail" method="post">
                                <div class="form-group">
                                    <label for="fess"> User Email </label>
                                    <input type="email" class="form-control" name="email" id="email" oninput="userAvailability()" placeholder="Email" required>
                                    <span id="user-availability-status1" style="font-size:12px;"></span>
                                </div>
                                <button type="submit" name="submit" id="submit" class="btn btn-o btn-primary">Update Email Address</button>
                            </form>
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
    <script src="assets/js/theme.js"></script>
    <script src="assets/js/email.js"></script>
</body>

</html>