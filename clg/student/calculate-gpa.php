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
    <style>
        .myTableClass {
            color: black;
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
                            <form method="post" action="" onSubmit="return formsubmit();" id="courseform">
                                <fieldset>
                                    <label>For how many courses would you like to calculate GPA?
                                        <input type="text" name="box" placeholder="Enter no. of courses" onkeyup="addbox(this.value)" />
                                    </label>
                                </fieldset>

                                <div class="table-responsive table mt-2" id="dataTable" role="grid" aria-describedby="dataTable_info">
                                    <table class="table dataTable my-0 black tableCell" id="gpatable">
                                        <thead class="h6 myFont">
                                            <tr class="text-center">
                                                <th style="width:20%;"><strong>Subject Name</strong></th>
                                                <th style="width:25%;"><strong>Marks Obtained</strong></th>
                                                <th style="width:25%;"><strong>Total Marks</strong></th>
                                                <th style="width:20%;"><strong>Credits</strong></th>
                                            </tr>
                                        </thead>

                                        <tbody class="myTableClass">

                                        </tbody>
                                    </table>
                                </div>
                                <span id="reportgpa" style="font-size:12px;"></span>
                                <div class="form-row form-group">
                                    <div class="col-lg-2">
                                    </div>
                                    <div class="col-lg-8">
                                        <button class="btn btn-success btn-xl form-control bg-gradient-success" id="cal_gpa" type="submit">Calculate GPA</button>
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
    <script>
        function formsubmit() {
            var x;
            x = confirm("Calculate CGPA?");
            if (x) {
                calcgpa();
            }
            return false;
        }

        function gradePointTimesCredits(score, total, credits) {
            score = score * 100 / total;
            if (score >= 90 && score <= 100) {
                return 10 * credits;
            } else if (score >= 80 && score <= 89) {
                return 9 * credits;
            } else if (score >= 70 && score <= 79) {
                return 8 * credits;
            } else if (score >= 60 && score <= 69) {
                return 7 * credits;
            } else if (score >= 50 && score <= 59) {
                return 6 * credits;
            } else {
                return 0;
            }
        }

        function addbox(x) {

            //var event = document.event.onkeyPress;
            //var key = event.keyCode || event.which;		    
            //alert(key);

            if (isNaN(x) && x.length > 0) {
                alert("Number of courses must be a number.");
                return;
            }

            if (x.length > 0 && x != 0) {

                var boxes = document.getElementsByClassName("myTableClass");
                var tableRow, courseName, marksObtained, marksTotal, totalCredits, tableRowEnd, iHtml, m;
                iHtml = "";

                for (m = 1; m <= x; m++) {
                    tableRow = "<tr>";
                    courseName = "<td><input class=\"form-control\" type=\"text\" name=\"course" + m + "\" id=\"course" + m + "\"></td>";
                    marksObtained = "<td><input class=\"form-control\" type=\"number\" name=\"m_obtained" + m + "\" id=\"m_obtained" + m + "\"></td>";
                    marksTotal = "<td><input class=\"form-control\" type=\"number\" name=\"m_total" + m + "\" id=\"m_total" + m + "\"></td>";
                    totalCredits = "<td><input class=\"form-control\" type=\"number\" name=\"s_credits" + m + "\" id=\"s_credits" + m + "\"></td>";
                    tableRowEnd = "</tr>";
                    iHtml += (tableRow + courseName + marksObtained + marksTotal + totalCredits + tableRowEnd);
                }
                boxes[0].innerHTML = iHtml;
            }
        }

        function calcgpa() {
            var form = document.getElementById("courseform");
            var i, cgpa, c, s, u, totalUnitsAccumulated = totalUnitsTaken = 0;
            var totalMark, totalMarks, markObtained, marksObtained, totalCredit, totalCredits, scoreResult, sumTotalOfGradePointTimesCredits;
            var numberOfBoxes = form.box.value;
            sumTotalOfGradePointTimesCredits = 0;
            totalCredits = totalMarks = marksObtained = 0;


            for (i = 1; i <= numberOfBoxes; i++) {
                markObtained = document.getElementById("m_obtained" + i).value;
                totalMark = document.getElementById("m_total" + i).value;
                totalCredit = document.getElementById("s_credits" + i).value;
                console.log(markObtained);
                console.log(totalMark);
                console.log(totalCredit);
                scoreResult = gradePointTimesCredits(markObtained, totalMark, totalCredit);
                console.log(scoreResult);

                if (scoreResult > 0) {
                    marksObtained += markObtained;
                    totalMarks += totalMark;
                    totalCredits += parseInt(totalCredit);
                    sumTotalOfGradePointTimesCredits += scoreResult;
                }

            }
            //after getting totalunits accumulated and taken, we compute cgpa
            console.log(sumTotalOfGradePointTimesCredits);
            console.log(totalCredits);
            cgpa = sumTotalOfGradePointTimesCredits / totalCredits;
            console.log(cgpa);
            alert(cgpa);



        }
    </script>
</body>

</html>