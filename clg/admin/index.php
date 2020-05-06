<?php
session_start();
include('include/config.php');
include('include/checklogin.php');
check_login();
include('include/cards.php');
include('include/functions.php');
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body id="page-top">
    <div id="wrapper">
        <?php include('include/sidebar.php'); ?>

        <div class="d-flex flex-column" id="content-wrapper">
            <div id="content">

                <?php include('include/header.php'); ?>

                <div class="container-fluid">
                    <div class="d-sm-flex justify-content-between align-items-center mb-4">
                        <h3 class="text-dark mb-0">Dashboard</h3>
                    </div>
                    <div class="row">
                        <?php myCard("view-students.php", "myText", "Students", "card shadow border-left-primary py-2", "card-body", "far fa-sticky-note fa-2x text-gray-300"); ?>
                        <?php myCard("view-teachers.php", "myText", "Teachers", "card shadow border-left-secondary py-2", "card-body", "far fa-sticky-note fa-2x text-gray-300"); ?>
                        <?php myCard("view-courses.php", "myText", "Courses", "card shadow border-left-success py-2", "card-body", "far fa-sticky-note fa-2x text-gray-300"); ?>
                        <?php myCard("view-time-table.php", "myText", "Timetables", "card shadow border-left-info py-2", "card-body", "far fa-sticky-note fa-2x text-gray-300"); ?>
                        <?php myCard("view-meetings.php", "myText", "Meetings", "card shadow border-left-warning py-2", "card-body", "far fa-sticky-note fa-2x text-gray-300"); ?>
                        <?php myCard("view-events.php", "myText", "Events", "card shadow border-left-danger py-2", "card-body", "far fa-sticky-note fa-2x text-gray-300"); ?>
                        <?php myCard("view-clubs.php", "myText", "Clubs", "card shadow border-left-dark py-2", "card-body", "far fa-sticky-note fa-2x text-gray-300"); ?>
                        <?php myCard("change-password.php", "myText", "Change Password", "card shadow border-left-primary py-2", "card-body", "far fa-sticky-note fa-2x text-gray-300"); ?>
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
</body>

</html>