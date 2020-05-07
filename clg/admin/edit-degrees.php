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
    <title>Admin | Edit Degrees</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <style>
    .card-body{
        line-height: 40px;
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
                            <p class="text-primary m-0 font-weight-bold">Edit Degrees</p>
                        </div>                  
                        <div class="card-body">
                            <form>
                                <div class="form-row form-group">
                                    <div class="col-md-6 label-column">
                                        <label class="col-form-label" for=""><strong>Creation&nbsp;Date :</strong></label>
                                    </div>
                                    <div class="col-md-6 input-column">
                                        <input class="form-control">
                                    </div>
                                </div>
                                <div class="form-row form-group">
                                    <div class="col-md-6 label-column">
                                        <label class="col-form-label" for=""><strong>Last&nbsp;Updation :</strong></label>
                                    </div>
                                    <div class="col-md-6 input-column">
                                        <input class="form-control">
                                    </div>
                                </div>
                                <div class="form-row form-group">
                                    <div class="col-md-6 label-column">
                                        <label class="col-form-label" for=""><strong>Degree :</strong></label>
                                    </div>
                                    <div class="col-md-6 input-column">
                                        <select class="form-control" name="degree">
                                            <option>--&nbsp;Select&nbsp;Degree&nbsp;--</option>
                                            <option>B.E.</option>
                                            <option>B.Tech</option>
                                            <option>MBA</option>
                                            <option>M.Tech.</option>
                                            <option>BBA</option>
                                            <option>B.Sc</option>
                                            <option>M.E.</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-row form-group">
                                    <div class="col-md-6 label-column">
                                        <label class="col-form-label" for=""><strong>Full&nbsp;Name :</strong></label>
                                    </div>
                                    <div class="col-md-6 input-column">
                                        <input class="form-control" type="text" name="name">
                                    </div>
                                </div>
                                <div class="form-row form-group">
                                    <div class="col-md-6 label-column">
                                        <label class="col-form-label" for=""><strong>Degree&nbsp;Type :</strong></label>
                                    </div>
                                    <div class="col-md-6 input-column">
                                        <input class="form-control" type="text" name="type">
                                    </div>
                                </div>
                                <div class="form-row form-group ">
                                    <div class="col-md-5">
                                        <button class="btn btn-primary offset-md-5 col-md-6 btn-xl" type="update" name="">Update</button>
                                    </div>
                                    <div class="col-md-5">
                                        <button class="btn btn-primary offset-md-5 col-md-6 btn-xl" type="back" name="">Back</button>
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.js"></script>
<script src="assets/js/theme.js"></script>
</body>

</html>