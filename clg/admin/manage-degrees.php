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
    <title>Admin | Manage Degrees</title>
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
                            <p class="text-primary m-0 font-weight-bold">Adding a New Degree</p>
                        </div>
                        
                        <div class="card-body">
                             <form role="form" >
                                <div class="form-row">
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label><strong>Enter Degree</strong></label>
                                            <input type="text" name="endegree" class="form-control" placeholder="enter degree">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label><strong>Enter Full Form</strong></label>
                                            <input type="text" name="enfullform" class="form-control" placeholder="enter full form">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label><strong>Add Degree</strong></label>
                                            <input type="text" name="addegree" class="form-control" placeholder="add degree">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label><strong>Add Degree Type</strong></label>
                                            <input type="text" name="addegreetype" class="form-control" placeholder="add degree type">
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>


                <br>

                 <div class="container-fluid">
                    <div class="card shadow">
                        <div class="card-header py-3">
                            <p class="text-primary m-0 font-weight-bold">Manage Degrees</p>
                        </div>
                        
                        <div class="card-body">
                             <div class="table-responsive table mt-2" id="dataTable" role="grid" aria-describedby="dataTable_info">
                                <table class="table dataTable my-0 myText myFont" id="viewtt">
                                    <thead class="h6 myFont">
                                        <tr class="text-center">
                                            <th>S.No.</th>
                                            <th>Degree</th>
                                            <th>Full&nbsp;Form</th>
                                            <th>Options</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                            <tr class="text-center">
                                            <td>1</td>
                                            <td>B.Tech</td>
                                            <td>Bachelor of Technology</td>
                                            <td>
                                                <a href="#" class="btn-xs tooltips" tooltip-placement="top" tooltip="Edit">
                                                    <i class="fa fa-edit"></i>
                                                </a>&nbsp;&nbsp;&nbsp;&nbsp;
                                                <a href="#" onClick="return confirm('Are you sure you want to delete?')" class="btn-xs tooltips" tooltip-placement="top" tooltip="Remove">
                                                <i class="fa fa-times fa fa-white"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr class="text-center">
                                            <td>2</td>
                                            <td>B.E.</td>
                                            <td>Bachelor of Engineering</td>
                                            <td>
                                                <a href="#" class="btn-xs tooltips" tooltip-placement="top" tooltip="Edit">
                                                    <i class="fa fa-edit"></i>
                                                </a>&nbsp;&nbsp;&nbsp;&nbsp;
                                                <a href="#" onClick="return confirm('Are you sure you want to delete?')" class="btn-xs tooltips" tooltip-placement="top" tooltip="Remove">
                                                <i class="fa fa-times fa fa-white"></i>
                                                </a>
                                            </td>
                                        </tr>
                                         <tr class="text-center">
                                            <td>3</td>
                                            <td>B.Com.</td>
                                            <td>Bachelor of Commerce</td>
                                            <td>
                                                <a href="#" class="btn-xs tooltips" tooltip-placement="top" tooltip="Edit">
                                                    <i class="fa fa-edit"></i>
                                                </a>&nbsp;&nbsp;&nbsp;&nbsp;
                                                <a href="#" onClick="return confirm('Are you sure you want to delete?')" class="btn-xs tooltips" tooltip-placement="top" tooltip="Remove">
                                                <i class="fa fa-times fa fa-white"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr class="text-center">
                                            <td>4</td>
                                            <td>B.Arts</td>
                                            <td>Bachelor of Arts</td>
                                            <td>
                                                <a href="#" class="btn-xs tooltips" tooltip-placement="top" tooltip="Edit">
                                                    <i class="fa fa-edit"></i>
                                                </a>&nbsp;&nbsp;&nbsp;&nbsp;
                                                <a href="#" onClick="return confirm('Are you sure you want to delete?')" class="btn-xs tooltips" tooltip-placement="top" tooltip="Remove">
                                                <i class="fa fa-times fa fa-white"></i>
                                                </a>
                                            </td>
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
