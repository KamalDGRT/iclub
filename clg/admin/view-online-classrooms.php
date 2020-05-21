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
    <title>Admin | View Online Classrooms</title>
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
                            <p class="text-primary m-0 font-weight-bold">Online Classrooms in the Institution</p>
                        </div>
                        <div class="card-body">

                            <div class="table-responsive table mt-2" id="dataTable" role="grid" aria-describedby="dataTable_info">
                                <table class="table dataTable my-0 black" id="onlineclass">
                                    <thead>
                                        <tr>
                                            <th>S.No.</th>
                                            <th>Batch</th>
                                            <th>Programme</th>
                                            <th>Semester</th>
                                            <th>Platform</th>
                                            <th>Classroom&nbsp;Code</th>
                                            <th>Options</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>2018-2022</td>
                                            <td>B.Tech. I.T.</td>
                                            <td>4</td>
                                            <td>Google</td>
                                            <td>dsalkfj</td>
                                            <td><a href="#" class="btn-xs tooltips" tooltip-placement="top" tooltip="Edit">
                                                    <i class="fa fa-edit"></i>
                                                </a>&nbsp;&nbsp;&nbsp;&nbsp;
                                                <a href="#" onClick="return confirm('Are you sure you want to delete?')" class="btn-xs tooltips" tooltip-placement="top" tooltip="Remove">
                                                    <i class="fa fa-times fa fa-white"></i>
                                                </a>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>2</td>
                                            <td>2018-2022</td>
                                            <td>B.Tech. I.T.</td>
                                            <td>4</td>
                                            <td>Edmodo</td>
                                            <td>piuopew</td>
                                            <td><a href="#" class="btn-xs tooltips" tooltip-placement="top" tooltip="Edit">
                                                    <i class="fa fa-edit"></i>
                                                </a>&nbsp;&nbsp;&nbsp;&nbsp;
                                                <a href="#" onClick="return confirm('Are you sure you want to delete?')" class="btn-xs tooltips" tooltip-placement="top" tooltip="Remove">
                                                    <i class="fa fa-times fa fa-white"></i>
                                                </a>
                                            </td>
                                        </tr>

                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>S.No.</th>
                                            <th>Batch</th>
                                            <th>Programme</th>
                                            <th>Semester</th>
                                            <th>Platform</th>
                                            <th>Classroom&nbsp;Code</th>
                                            <th>Options</th>
                                        </tr>
                                    </tfoot>
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
        $(document).ready(function() {
            $('#onlineclass').DataTable({
                "ordering": false
            });
        });
    </script>
</body>

</html>