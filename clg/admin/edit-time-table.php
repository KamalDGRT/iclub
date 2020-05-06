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
    <title>Admin | Edit Timetable</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
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
                            <p class="text-primary m-0 font-weight-bold">Editing a Timetable</p>
                        </div>
                        <div class="card-body">
                            <form>
                                <div class="row">
                                    <div class="col-lg-3 label-column">
                                        <input class="form-control" type="" name="" id="" placeholder="Batch">
                                    </div>
                                    <div class="col-lg-2 input-column">
                                        <input class="form-control" type="" name="" id="" placeholder="Semester">
                                    </div>
                                    <div class="col-lg-5 label-column">
                                        <input class="form-control" type="" name="" id="" placeholder="Programme">
                                    </div>
                                    <div class="col-lg-2 input-column">
                                        <input class="form-control" type="" name="" id="" placeholder="Section">
                                    </div>
                                </div><br>

                                <div class="table-responsive table mt-2" id="dataTable" role="grid" aria-describedby="dataTable_info">
                                    <table class="table dataTable my-0 black tableCell" id="viewtt">
                                        <thead class="h6 myFont">
                                            <tr class="text-center">
                                                <th style="width:10%;"><strong>Days</strong></th>
                                                <th style="width:15%;"><strong>1st Hour</strong></th>
                                                <th style="width:15%;"><strong>2nd Hour</strong></th>
                                                <th style="width:15%;"><strong>3rd Hour</strong></th>
                                                <th style="width:15%;"><strong>4th Hour</strong></th>
                                                <th style="width:15%;"><strong>5th Hour</strong></th>
                                                <th style="width:15%;"><strong>6th Hour</strong></th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            <tr>
                                                <td><strong>MONDAY</strong></td>
                                                <td><input class="form-control" type="text" name="mon&#91;&#93;" id="" value=""></td>
                                                <td><input class="form-control" type="text" name="mon&#91;&#93;" id="" value=""></td>
                                                <td><input class="form-control" type="text" name="mon&#91;&#93;" id="" value=""></td>
                                                <td><input class="form-control" type="text" name="mon&#91;&#93;" id="" value=""></td>
                                                <td><input class="form-control" type="text" name="mon&#91;&#93;" id="" value=""></td>
                                                <td><input class="form-control" type="text" name="mon&#91;&#93;" id="" value=""></td>
                                            </tr>

                                            <tr>
                                                <td><strong>TUESDAY</strong></td>
                                                <td><input class="form-control" type="text" name="tue&#91;&#93;" id="" value=""></td>
                                                <td><input class="form-control" type="text" name="tue&#91;&#93;" id="" value=""></td>
                                                <td><input class="form-control" type="text" name="tue&#91;&#93;" id="" value=""></td>
                                                <td><input class="form-control" type="text" name="tue&#91;&#93;" id="" value=""></td>
                                                <td><input class="form-control" type="text" name="tue&#91;&#93;" id="" value=""></td>
                                                <td><input class="form-control" type="text" name="tue&#91;&#93;" id="" value=""></td>
                                            </tr>

                                            <tr>
                                                <td><strong>WEDNESDAY</strong></td>
                                                <td><input class="form-control" type="text" name="wed&#91;&#93;" id="" value=""></td>
                                                <td><input class="form-control" type="text" name="wed&#91;&#93;" id="" value=""></td>
                                                <td><input class="form-control" type="text" name="wed&#91;&#93;" id="" value=""></td>
                                                <td><input class="form-control" type="text" name="wed&#91;&#93;" id="" value=""></td>
                                                <td><input class="form-control" type="text" name="wed&#91;&#93;" id="" value=""></td>
                                                <td><input class="form-control" type="text" name="wed&#91;&#93;" id="" value=""></td>
                                            </tr>

                                            <tr>
                                                <td><strong>THURSDAY</strong></td>
                                                <td><input class="form-control" type="text" name="thur&#91;&#93;" id="" value=""></td>
                                                <td><input class="form-control" type="text" name="thur&#91;&#93;" id="" value=""></td>
                                                <td><input class="form-control" type="text" name="thur&#91;&#93;" id="" value=""></td>
                                                <td><input class="form-control" type="text" name="thur&#91;&#93;" id="" value=""></td>
                                                <td><input class="form-control" type="text" name="thur&#91;&#93;" id="" value=""></td>
                                                <td><input class="form-control" type="text" name="thur&#91;&#93;" id="" value=""></td>
                                            </tr>

                                            <tr>
                                                <td><strong>FRIDAY</strong></td>
                                                <td><input class="form-control" type="text" name="fri&#91;&#93;" id="" value=""></td>
                                                <td><input class="form-control" type="text" name="fri&#91;&#93;" id="" value=""></td>
                                                <td><input class="form-control" type="text" name="fri&#91;&#93;" id="" value=""></td>
                                                <td><input class="form-control" type="text" name="fri&#91;&#93;" id="" value=""></td>
                                                <td><input class="form-control" type="text" name="fri&#91;&#93;" id="" value=""></td>
                                                <td><input class="form-control" type="text" name="fri&#91;&#93;" id="" value=""></td>
                                            </tr>

                                            <tr>
                                                <td><strong>SATURDAY</strong></td>
                                                <td><input class="form-control" type="text" name="sat&#91;&#93;" id="" value=""></td>
                                                <td><input class="form-control" type="text" name="sat&#91;&#93;" id="" value=""></td>
                                                <td><input class="form-control" type="text" name="sat&#91;&#93;" id="" value=""></td>
                                                <td><input class="form-control" type="text" name="sat&#91;&#93;" id="" value=""></td>
                                                <td><input class="form-control" type="text" name="sat&#91;&#93;" id="" value=""></td>
                                                <td><input class="form-control" type="text" name="sat&#91;&#93;" id="" value=""></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>

                                <div class="form-row form-group">
                                    <div class="col-lg-2"></div>
                                    <div class="col-lg-8 input-column">
                                        <button class="btn btn-primary btn-xl form-control bg-gradient-primary" type="submit" name="">Update Timetable</button>
                                    </div>
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
</body>

</html>