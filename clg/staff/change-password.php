<?php
session_start();
include('include/config.php');
include('include/checklogin.php');
check_login();
include('include/functions.php');
if (isset($_POST['submit'])) {
    $sql = mysqli_query($con, "SELECT password FROM  users where password='" . md5($_POST['cpass']) . "' && id='" . $_SESSION['id'] . "'");
    $num = mysqli_fetch_array($sql);
    if ($num > 0) {
        $con = mysqli_query($con, "update namelist set password='" . md5($_POST['npass']) . "'  where id='" . $_SESSION['id'] . "'");
        $_SESSION['msg1'] = "Password Changed Successfully !!";
    } else {
        $_SESSION['msg1'] = "Credentials do not match !!";
    }
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title> Staff | Change Password</title>
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
                            <p class="text-primary m-0 font-weight-bold">Changing Password</p>
                        </div>
                        <p style="color:red;">&nbsp; &nbsp;
                            <?php if(isset($_SESSION['msg1'])) { echo htmlentities($_SESSION['msg1']);} ?>
                            &nbsp;&nbsp;<?php  {echo htmlentities($_SESSION['msg1'] = "");} ?></p>
                        <div class="card-body">
                            <form role="form" name="chngpwd" method="post" onSubmit="return valid();">
                                <div class="form-group">
                                    <label for="address"><strong>Current Password</strong></label>
                                    <input type="password" name="cpass" class="form-control" placeholder="Enter Current Password">
                                </div>
                                <div class="form-row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="city"><strong>New Password</strong></label>
                                            <input type="password" name="npass" class="form-control" placeholder="New Password">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="country"><strong>Confirm Password</strong></label>
                                            <input type="password" name="cfpass" class="form-control" placeholder="Confirm Password">
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="form-group">
                                    <button type="submit" name="submit" class="btn btn-primary btn-xl" type="submit">Save&nbsp;Settings</button>
                                </div>
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
    <script src="assets/js/password.js"></script>
</body>

</html>