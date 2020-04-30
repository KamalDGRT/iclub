<?php
session_start();
include('include/config.php');
include('include/checklogin.php');
check_login();
include('include/functions.php');
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Student | View Timetable</title>
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
                            <p class="text-primary m-0 font-weight-bold">Time Table for this Semester</p>
                        </div>
                        <div class="card-body">

                            <div class="table-responsive table mt-2" id="dataTable" role="grid" aria-describedby="dataTable_info">
                                <table class="table dataTable my-0 myText myFont" id="viewtt">
                                    <thead class="h6 myFont">
                                        <tr>
                                            <th>Days</th>
                                            <th>1st Hour</th>
                                            <th>2nd Hour</th>
                                            <th>3rd Hour</th>
                                            <th>4th Hour</th>
                                            <th>5th Hour</th>
                                            <th>6th Hour</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <tr>
                                            <td><strong>MONDAY</strong></td>
                                            <td>SCS1207</td>
                                            <td>SEC1312</td>
                                            <td>SMT1205</td>
                                            <td>SEC1312</td>
                                            <td>SCS1306</td>
                                            <td>SCS1209</td>
                                        </tr>

                                        <tr>
                                            <td><strong>TUESDAY</strong></td>
                                            <td>SMT1205</td>
                                            <td>SMT1205</td>
                                            <td>SCS1306</td>
                                            <td>SEC1312</td>
                                            <td>SCS1206</td>
                                            <td>SCS1206</td>
                                        </tr>

                                        <tr>
                                            <td><strong>WEDNESDAY</strong></td>
                                            <td>SEC4087&nbsp;/&nbsp;SCS4302</td>
                                            <td>SEC4087&nbsp;/&nbsp;SCS4302</td>
                                            <td>SEC4087&nbsp;/&nbsp;SCS4302</td>
                                            <td>SCS1207</td>
                                            <td>SMT1205</td>
                                            <td>SEC1312</td>
                                        </tr>

                                        <tr>
                                            <td><strong>THURSDAY</strong></td>
                                            <td>SCS1206</td>
                                            <td>SCS1206</td>
                                            <td>SCS1207</td>
                                            <td>SMT1205</td>
                                            <td>SCS1209</td>
                                            <td>SCS1209</td>
                                        </tr>

                                        <tr>
                                            <td><strong>FRIDAY</strong></td>
                                            <td>SCS1209</td>
                                            <td>SCS1207</td>
                                            <td>SCS1306</td>
                                            <td>SEC4087&nbsp;/&nbsp;SCS4302</td>
                                            <td>SEC4087&nbsp;/&nbsp;SCS4302</td>
                                            <td>SEC4087&nbsp;/&nbsp;SCS4302</td>
                                        </tr>

                                        <tr>
                                            <td><strong>SATURDAY</strong></td>
                                            <td>SEC1312</td>
                                            <td>SMT1205</td>
                                            <td>SCS1206</td>
                                            <td>SCS1209</td>
                                            <td>SCS1306</td>
                                            <td>SCS1207</td>
                                        </tr>
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
