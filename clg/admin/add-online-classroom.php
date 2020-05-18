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
    <title> Admin | Add Online Classroom</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <style>
        option{
            height: 50px;
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

                    <div class="card shadow">
                        <div class="card-header py-3">
                            <p class="text-primary m-0 font-weight-bold">Add a Online Classroom</p>
                        </div>

                        <div class="card-body">
                            <form>

                                <div class="form-row form-group">
                                    <div class="col-md-6 label-column">
                                        <label class="col-form-label" for="batches"><strong>Batch :</strong></label>
                                    </div>
                                    <div class="col-md-6 input-column">
                                        <?php showBatches("batches"); ?>
                                    </div>
                                </div>

                                <div class="form-row form-group">
                                    <div class="col-md-6 label-column">
                                        <label class="col-form-label" for=""><strong>Semester :</strong></label>
                                    </div>
                                    <div class="col-md-6 input-column">
                                        <input class="form-control" type="text" name="">
                                    </div>
                                </div>

                                <div class="form-row form-group">
                                    <div class="col-md-6 label-column">
                                        <label class="col-form-label" for=""><strong>Programme :</strong></label>
                                    </div>
                                    <div class="col-md-6 input-column">
                                        <input class="form-control" type="text" name="">
                                    </div>
                                </div>

                                <div class="form-row form-group">
                                    <div class="col-md-6 label-column">
                                        <label class="col-form-label" for=""><strong>Section :</strong></label>
                                    </div>
                                    <div class="col-md-6 input-column">
                                        <input class="form-control" type="text" name="">
                                    </div>
                                </div>

                                <div class="form-row form-group">
                                    <div class="col-md-6 label-column">
                                        <label class="col-form-label" for=""><strong>Course&nbsp;Code :</strong></label>
                                    </div>
                                    <div class="col-md-6 input-column">
                                        <input class="form-control" type="text" name="">
                                    </div>
                                </div>

                                <div class="form-row form-group">
                                    <div class="col-md-6 label-column">
                                        <label class="col-form-label" for=""><strong>Platform :</strong></label>
                                    </div>
                                    <div class="col-md-6 input-column">
                                        <input class="form-control" type="text" name="">
                                    </div>
                                </div>

                                <div class="form-row form-group">
                                    <div class="col-md-6 label-column">
                                        <label class="col-form-label" for=""><strong>Classroom&nbsp;Code :</strong></label>
                                    </div>
                                    <div class="col-md-6 input-column">
                                        <input class="form-control" type="text" name="">
                                    </div>
                                </div>

                                <div class="form-row form-group">
                                    <div class="col-md-6 label-column">
                                        <label class="col-form-label" for=""><strong>Teacher-in-charge :</strong></label>
                                    </div>
                                    <div class="col-md-6 input-column">
                                        <input class="form-control" type="text" name="">
                                    </div>
                                </div>

                                <div class="form-row form-group">
                                    <div class="col-lg-3"></div>
                                    <div class="col-md-6 label-column">
                                        <button class="btn btn-primary btn-xl form-control bg-gradient-primary" type="submit" name="add_class_room"><strong>Add&nbsp;Classroom</strong></button>
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
