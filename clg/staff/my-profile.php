<?php
session_start();
include('include/config.php');
include('include/checklogin.php');
check_login();
include('include/fields.php');
include('include/functions.php');
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>My Profile</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">

    <style>
        .borderit {
            border: 1px solid black;
        }

        .myText {
            font-weight: bold;
            font-size: larger;
        }

        .mu-10 {
            margin-top: 10px;
        }
    </style>
</head>

<body id="page-top">
    <div id="wrapper">
        <?php include('include/sidebar.php'); ?>

        <div class="d-flex flex-column" id="content-wrapper">
            <div id="content">

                <?php include('include/header.php'); ?>

                <div class="container-fluid">

                    <div class="card shadow mb-5">
                        <div class="card-header py-3">
                            <p class="text-primary m-0 font-weight-bold">My Profile</p>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-8">
                                    <?php $row = fetchFrom("namelist", $_SESSION['id']); ?>
                                    </span>
                                    <?php field_1("", 5, "text-dark myText", "Name", 7, "text-dark h5", "$row[2]"); ?>
                                    <?php field_1("mu-10", 5, "text-dark myText", "Registration Number", 7, "text-dark h5", "$row[1]"); ?>                                    
                                    <?php field_1("mu-10", 5, "text-dark myText", "Email Address", 7, "text-dark h5", "$row[3]"); ?>
                                    
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <?php include('include/footer.php'); ?>

            </div><a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a>
        </div>

    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.easing.js"></script>
    <script src="assets/js/theme.js"></script>
</body>

</html>