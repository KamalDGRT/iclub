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
    <title> Admin | Add Meeting</title>
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
                            <p class="text-primary m-0 font-weight-bold">Add a Meeting</p>
                        </div>

                        <div class="card-body">
                            <form>

                                <div class="form-row form-group">
                                    <div class="col-md-6 label-column">
                                        <label class="col-form-label" for=""><strong>Date :</strong></label>
                                    </div>
                                    <div class="col-md-6 input-column">
                                        <input class="form-control" type="date" name="date">
                                    </div>
                                </div>

                                <div class="form-row form-group">
                                    <div class="col-md-6 label-column">
                                        <label class="col-form-label" for=""><strong>Course&nbsp;Name :</strong></label>
                                    </div>
                                    <div class="col-md-6 input-column">
                                        <select class="form-control" name="holidaytype">
                                            <option>--&nbsp;Select&nbsp;Course&nbsp;Name&nbsp;--</option>
                                            <option>BE</option>
                                            <option>B.Tech</option>
                                            <option>Mechanical</option>
                                            <option>Civil</option>
                                        </select>
                                    </div>
                                </div>


                                <div class="form-row form-group">
                                    <div class="col-md-6 label-column">
                                        <label class="col-form-label" for=""><strong>Meeting Host :</strong></label>
                                    </div>
                                    <div class="col-md-6 input-column">
                                        <input class="form-control" type="text" name="host">
                                    </div>
                                </div>



                                <div class="form-row form-group">
                                    <div class="col-md-6 label-column">
                                        <label class="col-form-label" for=""><strong>Time :</strong></label>
                                    </div>
                                    <div class="col-md-6 input-column">
                                        <input class="form-control" type="time" name="time">
                                    </div>
                                </div>



                                <div class="form-row form-group">
                                    <div class="col-md-6 label-column">
                                        <label class="col-form-label" for=""><strong>Meeting Platform :</strong></label>
                                    </div>
                                    <div class="col-md-6 input-column">
                                        <input class="form-control" type="text" name="platform">
                                    </div>
                                </div>


                                <div class="form-row form-group">
                                    <div class="col-md-6 label-column">
                                        <label class="col-form-label" for=""><strong>Meeting id :</strong></label>
                                    </div>
                                    <div class="col-md-6 input-column">
                                        <input class="form-control" type="number" name="id">
                                    </div>
                                </div>

                                <div class="form-row form-group">
                                    <div class="col-md-6 label-column">
                                        <label class="col-form-label" for=""><strong>*Meeting Password :</strong></label>
                                    </div>
                                    <div class="col-md-6 input-column">
                                        <input class="form-control" type="password" name="password">
                                    </div>
                                </div>

                                <div class="form-row form-group">
                                    <div class="col-lg-3"></div>
                                    <div class="col-md-6 label-column">
                                        <button class="btn btn-primary btn-xl form-control bg-gradient-primary" type="submit" name="add_meeting"><strong>Add&nbsp;Meeting</strong></button>
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
