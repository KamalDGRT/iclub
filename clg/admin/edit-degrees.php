<?php
session_start();
include('include/config.php');
include('include/checklogin.php');
check_login();
include('include/functions.php');
$did = intval($_GET['included']); // get degree id
$msg = "";
if (isset($_POST['deg_update'])) {
    global $con;

    $sdegree = $_POST['short_degree'];

    $fdegree = $_POST['full_degree'];

    $dtype = $_POST['degree_type'];

    date_default_timezone_set('Asia/Kolkata');
    $ldate=date( 'Y-m-d H:i:s');

    $query = "UPDATE degrees SET s_degree='$sdegree',deg_fullname='$fdegree',deg_type='$dtype',updation_date='$ldate' WHERE id='$did'";

    $sql = mysqli_query($con, $query);

    if ($sql) {
        $msg = "Degree Details updated Successfully";
    }
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Admin | Edit Degrees</title>
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
                            <p class="text-primary m-0 font-weight-bold">Edit Degrees</p>
                        </div>
                        <div class="card-body">
                            <h5 style="color: green; font-size:18px; ">
                                <?php if ($msg) {
                                    echo htmlentities($msg);
                                } ?>
                            </h5>
                            <form method="post" action="">
                                <?php $data = fetchUsingID("degrees", $did); ?>
                                <div class="form-row form-group">
                                    <div class="col-md-6 label-column">
                                        <label class="col-form-label" for=""><strong>Creation&nbsp;Date :</strong></label>
                                    </div>
                                    <div class="col-md-6 input-column">
                                        <p><?php echo myDateFormat($data['creation_date'], 'd-m-Y g:i:s a'); ?></p>
                                    </div>
                                </div>

                                <div class="form-row form-group">
                                    <div class="col-md-6 label-column">
                                        <label class="col-form-label" for=""><strong>Last&nbsp;Updation :</strong></label>
                                    </div>
                                    <div class="col-md-6 input-column">
                                        <?php if (is_null($data['updation_date'])) {
                                            echo "<p> Not yet updated. </p>";
                                        } else {
                                            echo "<p>" . myDateFormat($data["updation_date"], 'd-m-Y g:i:s a') . "</p>";
                                        }
                                        ?>
                                    </div>
                                </div>

                                <div class="form-row form-group">
                                    <div class="col-md-6 label-column">
                                        <label class="col-form-label" for=""><strong>Degree :</strong></label>
                                    </div>
                                    <div class="col-md-6 input-column">
                                        <input class="form-control" type="text" name="short_degree" value="<?php echo $data['s_degree']; ?>">
                                    </div>
                                </div>

                                <div class="form-row form-group">
                                    <div class="col-md-6 label-column">
                                        <label class="col-form-label" for=""><strong>Full&nbsp;Name :</strong></label>
                                    </div>
                                    <div class="col-md-6 input-column">
                                        <input class="form-control" type="text" name="full_degree" value="<?php echo $data["deg_fullname"]; ?>">
                                    </div>
                                </div>

                                <div class="form-row form-group">
                                    <div class="col-md-6 label-column">
                                        <label class="col-form-label" for=""><strong>Degree&nbsp;Type :</strong></label>
                                    </div>
                                    <div class="col-md-6 input-column">
                                        <select class="form-control" name="degree_type">
                                            <option>--&nbsp;Select&nbsp;Degree&nbsp;Type&nbsp;--</option>
                                            <?php
                                            $dtype = $data["deg_type"];
                                            global $con;
                                            $sel_query = "SELECT * FROM degree_types";
                                            $result = mysqli_query($con, $sel_query);
                                            while ($row = mysqli_fetch_assoc($result)) {
                                                $dcode = $row["deg_code"];
                                                $dname = $row["deg_type_name"];
                                                if ($dtype == $dcode) {
                                                    echo "\n<option value=\"{$dcode}\" selected>{$dname}</option>";
                                                } else {
                                                    echo "\n<option value=\"{$dcode}\">{$dname}</option>";
                                                }
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-row form-group ">
                                    <div class="col-md-5">
                                        <button class="btn btn-primary offset-md-5 col-md-6 btn-xl" type="update" name="deg_update">Update</button>
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