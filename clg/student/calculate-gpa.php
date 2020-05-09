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
    <title>Student | GPA CALCULATOR</title>
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
                            <p class="text-primary m-0 font-weight-bold">GPA Calculator</p>
                        </div>                  
                        <div class="card-body">
                             <div class="table-responsive table mt-2" id="dataTable" role="grid" aria-describedby="dataTable_info">
                                <table class="table dataTable my-0 myText myFont" id="viewtt">
                                    <thead class="h6 myFont">
                                        <tr>
                                            <th>Subject Name</th>
                                            <th>Marks obtained</th>
                                            <th>Total Marks</th>
                                            <th>Credits</th>                                           
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><input class="form-control" type="text"></td>
                                            <td><input class="form-control" type="number"></td>
                                            <td><input class="form-control" type="number"></td>
                                            <td><input class="form-control"></td>
                                        </tr>
                                        <tr>
                                            <td><input class="form-control" type="text"></td>
                                            <td><input class="form-control" type="number"></td>
                                            <td><input class="form-control" type="number"></td>
                                            <td><input class="form-control"></td>
                                        </tr>
                                        <tr>
                                            <td><input class="form-control" type="text"></td>
                                            <td><input class="form-control" type="number"></td>
                                            <td><input class="form-control" type="number"></td>
                                            <td><input class="form-control"></td>
                                        </tr>
                                        <tr>
                                            <td><input class="form-control" type="text"></td>
                                            <td><input class="form-control" type="number"></td>
                                            <td><input class="form-control" type="number"></td>
                                            <td><input class="form-control"></td>
                                        </tr>
                                        <tr>
                                            <td><input class="form-control" type="text"></td>
                                            <td><input class="form-control" type="number"></td>
                                            <td><input class="form-control" type="number"></td>
                                            <td><input class="form-control"></td>
                                        </tr>
                                        <tr>
                                            <td><input class="form-control" type="text"></td>
                                            <td><input class="form-control" type="number"></td>
                                            <td><input class="form-control" type="number"></td>
                                            <td><input class="form-control"></td>
                                        </tr>
                                        <tr>
                                            <td><input class="form-control" type="text"></td>
                                            <td><input class="form-control" type="number"></td>
                                            <td><input class="form-control" type="number"></td>
                                            <td><input class="form-control"></td>
                                        </tr>
                                        <tr>
                                            <td><input class="form-control" type="text"></td>
                                            <td><input class="form-control" type="number"></td>
                                            <td><input class="form-control" type="number"></td>
                                            <td><input class="form-control"></td>
                                        </tr>
                                        <tr>
                                            <td><input class="form-control" type="text" name="GR9"></td>
                                            <td><input class="form-control" type="number"></td>
                                            <td><input class="form-control" type="number"></td>
                                            <td><input class="form-control"></td>
                                        </tr>
                                        <tr>
                                            <td><input class="form-control" type="text"></td>
                                            <td><input class="form-control" type="number"></td>
                                            <td><input class="form-control" type="number"></td>
                                            <td><input class="form-control"></td>
                                        </tr>
                                    </tbody>
                                </table>
                                 <div class="form-row form-group ">
                                    <div class="col-md-11">
                                        <button class="btn btn-primary offset-md-5 col-md-3 btn-xl" type="button" value="Calculate" name="CalcButton" OnClick="gpacalc()">Calculate&nbsp;GPA</button>
                                    </div>
                                </div>

                                <center>
                                    <form>
                                        <div class="form-row form-group">
                                            <div class="col-md-6 label-column">
                                                <label class="col-form-label" for=""><strong>GPA :</strong></label>
                                            </div>
                                            <div class="col-md-4 input-column">
                                                <input class="form-control">
                                            </div>
                                        </div>
                                    </form>
                                </center>
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.js"></script>
<script src="assets/js/theme.js"></script>
<SCRIPT LANGUAGE="JavaScript"></SCRIPT>
</body>
</html>