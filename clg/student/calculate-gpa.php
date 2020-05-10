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
    <title>Student | GPA Calculator</title>
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
                            <p class="text-primary m-0 font-weight-bold">GPA Calculator</p>
                        </div>
                        <div class="card-body">

                            <div class="table-responsive table mt-2" id="dataTable" role="grid" aria-describedby="dataTable_info">
                                <table class="table dataTable my-0 black tableCell" id="gpatable">
                                    <thead class="h6 myFont">
                                        <tr class="text-center">
                                            <th style="width:20%;"><strong>Subject Name</strong></th>
                                            <th style="width:25%;"><strong>Marks Obtained</strong></th>
                                            <th style="width:25%;"><strong>Total Marks</strong></th>
                                            <th style="width:20%;"><strong>Credits</strong></th>
                                            <th style="width:10%;"><strong>Remove</strong></th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <tr>
                                            <td><input class="form-control" type="text" id=""></td>
                                            <td><input class="input-marks-obtained" type="number" id="tinput" oninput="calculateGPA()" ></td>
                                            <td><input class="input-marks-total" type="number" id="tinput"></td>
                                            <td><input class="input-credits" type="number" id="tinput"></td>
                                            <td><button id="remove_subject" class="btn btn-danger btn-xl text-center form-control bg-gradient-danger">Remove</button></td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                            <span id="reportgpa" style="font-size:12px;"></span>
                            <div class="form-row form-group">
                                <div class="col-lg-2">
                                </div>
                                <div class="col-lg-8">
                                    <button class="btn btn-success btn-xl form-control bg-gradient-success" id="add_subject">Add a new Subject</button>
                                </div>
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
    <script src="assets/js/theme.js"></script>
    <script>
        $(document).ready(function() {
            $("#add_subject").click(function() {
                $("#gpatable").append("<tr>" +
                    "<td><input class=\"form-control\" type=\"text\" name=\"\" id=\"\"></td>" +
                    "<td><input class=\"input-marks-obtained\" type=\"text\" name=\"\" id=\"tinput\"></td>" +
                    "<td><input class=\"input-marks-total\" type=\"text\" name=\"\" id=\"tinput\"></td>" +
                    "<td><input class=\"input-credits\" type=\"text\" name=\"\" id=\"tinput\"></td>" +
                    "<td><button id=\"remove_subject\" class=\"btn btn-danger btn-xl text-center form-control bg-gradient-danger\">Remove</button></td>" +
                    "</tr>");
                    calculateGPA();
            });

            $("#gpatable").on("click", "#remove_subject", function() {
                $(this).closest("tr").remove();
                calculateGPA();
            });

            $("#gpatable").on("input", "#tinput", function() {
                calculateGPA();
            });



            function calculateGPA(){
            var cls = document.getElementById("gpatable").getElementsByTagName("td");
            var sum = 0;
            var sum2 = 0;
            for (var i = 0; i < cls.length; i++) {
                if (cls[i].className == "input-marks-obtained") {
                    sum += isNaN(cls[i].innerHTML) ? 0 : parseInt(cls[i].innerHTML);
                }
                if (cls[i].className == "input-marks-total") {
                    sum2 += isNaN(cls[i].innerHTML) ? 0 : parseInt(cls[i].innerHTML);
                }
            }
            var resultstr = "total marks obtained : " + sum + " total marks : " + sum2 + " cls.length : " +  cls.length;
            $("#reportgpa").html(resultstr);
        }
        });
    </script>

</body>

</html>