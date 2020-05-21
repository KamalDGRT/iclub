<?php
require_once("include/config.php");
if (!empty($_POST["shcode"])) {
    $shcode = $_POST["shcode"];

    $result = mysqli_query($con, "SELECT s_code FROM s_schools WHERE s_code='$shcode'");
    $count = mysqli_num_rows($result);
    if ($count > 0) {
        echo "<span style='color:red'> Short Code already exists .</span>";
        echo "<script>$('#submit').prop('disabled',true);</script>";
    } else {
        echo "<span style='color:green'> Looks like a good Short Code.</span>";
        echo "<script>$('#submit').prop('disabled',false);</script>";
    }
}

if (!empty($_POST["schname"])) {
    $schname = $_POST["schname"];

    $result = mysqli_query($con, "SELECT sch_name FROM s_schools WHERE sch_name='$schname'");
    $count = mysqli_num_rows($result);
    if ($count > 0) {
        echo "<span style='color:red'> School Name already exists .</span>";
        echo "<script>$('#submit').prop('disabled',true);</script>";
    } else {
        echo "<span style='color:green'> School Name looks good.</span>";
        echo "<script>$('#submit').prop('disabled',false);</script>";
    }
}

?>
