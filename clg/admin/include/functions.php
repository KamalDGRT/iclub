<?php
$database = 'rksclg';
$host = 'localhost';
$user = 'root';
$pass = '';
// try to conncet to database
$con = mysqli_connect($host, $user, $pass, $database);

// escape string
function e($val)
{
    global $con;
    return mysqli_real_escape_string($con, trim($val));
}

function fetchUsingID($table, $id)
{
    global $con;
    $id = (int) $id;
    $query = "SELECT * FROM {$table} WHERE id={$id}";
    $result = mysqli_query($con, $query) or die(mysqli_error($con));
    $row = mysqli_fetch_array($result);
    return $row;
}

function fetchDegreeTypes()
{
    global $con;
    $query = "SELECT deg_code,deg_type_name FROM degree_types";
    $result = mysqli_query($con, $query) or die(mysqli_error($con));
    $row = mysqli_fetch_array($result);
    return $row;
}


function fetchFrom($table, $regno)
{
    global $con;
    $regno = (int) $regno;
    $query = "SELECT * FROM " . $table . " WHERE reg_no=" . $regno;
    $result = mysqli_query($con, $query) or die(mysqli_error($con));
    $row = mysqli_fetch_array($result);
    return $row;
}

function showDegreeTypes($name,$extra="")
{
    global $con;

    $sel_query = "SELECT * FROM degree_types";
    $result = mysqli_query($con, $sel_query) or die(mysqli_error($con));

    echo "<select class=\"form-control\" name=\"" . $name . "\" ".$extra.">";
    echo "<option>--&nbsp;Select&nbsp;Degree&nbsp;Type--</option>\n";

    while ($row = mysqli_fetch_assoc($result)) {
        $content = "\n<option value=\"{$row["deg_code"]}\">{$row["deg_type_name"]}</option>";
        echo $content;
    }

    echo "</select>\n";
}


function statusText($status)
{
    $message = "";
    if ($status) {
        $message = "Successful";
    } else {
        $message = "Unsuccessful";
    }
    return $message;
}

function meetingStatusText($status)
{
    $message = "";
    if ($status == 1) {
        $message = "Held";
    } elseif ($status == 2) {
        $message = "Cancelled";
    } elseif ($status == 3) {
        $message = "Upcoming";
    }
    return $message;
}

function courseTypeText($status)
{
    $message = "";
    if ($status == 2) {
        $message = "Practical";
    } elseif ($status == 1) {
        $message = "Theory";
    }
    return $message;
}

function courseStatusText($status)
{
    $message = "";
    if ($status == 1) {
        $message = "Active";
    } elseif ($status == 2) {
        $message = "Removed";
    }
    return $message;
}
function PHPDay($date)
{
    $timestamp = strtotime($date);
    $day = date('l', $timestamp);
    return $day;
}

function displayTableHeadUserLogs()
{
    $content = "<tr class=\"text-center\">";
    $content .=   "<th style=\"width:5%;\">#</th>";
    $content .=   "<th style=\"width:10%;\">User ID</th>";
    $content .=   "<th style=\"width:15%;\">User Name</th>";
    $content .=   "<th style=\"width:20%;\">Login Time</th>";
    $content .=   "<th style=\"width:15%;\">Logout Time</th>";
    $content .=   "<th style=\"width:10%;\">Status</th>";
    $content .=   "<th style=\"width:10%;\" class=\"hidden-xs\">Action</th>";
    $content .= "</tr>\n";
    echo $content;
}

function myDateFormat($dateTime, $format)
{
    $myDate = "";
    if (!is_null($dateTime)) {
        $log = date_create($dateTime);
        $myDate = date_format($log, $format);
    }
    return $myDate;
}

function displayUserLogs()
{
    global $con;
    $count = 1;
    $sel_query = "SELECT * FROM userlog";
    $result = mysqli_query($con, $sel_query);

    while ($row = mysqli_fetch_assoc($result)) {

        $content = "<tr class=\"text-center\">";
        $content .=      "<td>$count</td>";
        $content .=      "<td>" . $row["uid"] . "</td>";
        $content .=      "<td>" . $row["username"] . "</td>";
        $content .=      "<td>" . myDateFormat($row["loginTime"], 'd-m-Y g:i:s a') . "</td>";
        $content .=      "<td>" . myDateFormat($row["logout"], 'd-m-Y g:i:s a') . "</td>";
        $content .=      "<td>" . statusText($row["status"]) . "</td>";
        $content .=      "<td>";
        $content .=          "<a href=\"#\" class=\"btn-xs tooltips\" tooltip-placement=\"top\" tooltip=\"Edit\">";
        $content .=              "<i class=\"fa fa-edit\"></i>";
        $content .=          "</a>&nbsp;&nbsp;&nbsp;&nbsp;";
        $content .=          "<a href=\"#\" onClick=\"return confirm('Are you sure you want to delete?')\" class=\"btn-xs tooltips\" tooltip-placement=\"top\" tooltip=\"Remove\">";
        $content .=              "<i class=\"fa fa-times fa fa-white\"></i>";
        $content .=          "</a>";
        $content .=      "</td>";
        $content .= " </tr>\n";

        echo $content;
        $count++;
    }
}

function displayTableHeadMeetingAdmin()
{
    $content = "<tr class=\"text-center\">";
    $content .=   "<th style=\"width:15%;\">Date</th>";
    $content .=   "<th style=\"width:25%;\">Course&nbsp;Name</th>";
    $content .=   "<th style=\"width:15%;\">Meeting&nbsp;Host</th>";
    $content .=   "<th style=\"width:15%;\">Meeting&nbsp;Time</th>";
    $content .=   "<th style=\"width:15%;\">Status</th>";
    $content .=   "<th style=\"width:15%;\">Options</th>";
    $content .= "</tr>\n";
    echo $content;
}

function displayMeetingsAdmin()
{
    global $con;
    $sel_query = "SELECT * FROM meetings";
    $result = mysqli_query($con, $sel_query);

    while ($row = mysqli_fetch_assoc($result)) {

        $content = "<tr class=\"text-center\">";
        $content .=      "<td>" . myDateFormat($row["m_date"], 'd-m-Y') . "</td>";
        $content .=      "<td>" . $row["course_name"] . "</td>";
        $content .=      "<td>" . $row["m_host"] . "</td>";
        $content .=      "<td>" . $row["m_timing"] . "</td>";
        $content .=      "<td>" . meetingStatusText($row["m_status"]) . "</td>";
        $content .=      "<td>";
        $content .=          "<a href=\"#\" class=\"btn-xs tooltips\" tooltip-placement=\"top\" tooltip=\"Edit\">";
        $content .=              "<i class=\"fa fa-eye\"></i>";
        $content .=          "</a>&nbsp;&nbsp;&nbsp;&nbsp;";
        $content .=          "<a href=\"#\" class=\"btn-xs tooltips\" tooltip-placement=\"top\" tooltip=\"Edit\">";
        $content .=              "<i class=\"fa fa-edit\"></i>";
        $content .=          "</a>&nbsp;&nbsp;&nbsp;&nbsp;";
        $content .=          "<a href=\"#\" onClick=\"return confirm('Are you sure you want to delete?')\" class=\"btn-xs tooltips\" tooltip-placement=\"top\" tooltip=\"Remove\">";
        $content .=              "<i class=\"fa fa-times fa fa-white\"></i>";
        $content .=          "</a>";
        $content .=      "</td>";
        $content .= " </tr>\n";

        echo $content;
    }
}

function displayTableHeadCoursesAdmin()
{
    $content = "<tr class=\"text-center\">";
    $content .=   "<th style=\"width:15%;\">S.No.</th>";
    $content .=   "<th style=\"width:15%;\">Course&nbsp;Code</th>";
    $content .=   "<th style=\"width:35%;\">Course&nbsp;Name</th>";
    $content .=   "<th style=\"width:15%;\">Course&nbsp;Type</th>";
    $content .=   "<th style=\"width:10%;\">Status</th>";
    $content .=   "<th style=\"width:15%;\" class=\"hidden-xs\">Options</th>";
    $content .= "</tr>\n";
    echo $content;
}

function displayCoursesAdmin()
{
    global $con;
    $sel_query = "SELECT * FROM courses";
    $result = mysqli_query($con, $sel_query);
    $count = 1;
    while ($row = mysqli_fetch_assoc($result)) {

        $content = "<tr class=\"text-center\">";
        $content .=      "<td>" . $count . "</td>";
        $content .=      "<td>" . $row["course_code"] . "</td>";
        $content .=      "<td>" . $row["course_name"] . "</td>";
        $content .=      "<td>" . courseTypeText($row["course_type"]) . "</td>";
        $content .=      "<td>" . courseStatusText($row["status"]) . "</td>";
        $content .=      "<td>";
        $content .=          "<a href=\"#\" class=\"btn-xs tooltips\" tooltip-placement=\"top\" tooltip=\"Edit\">";
        $content .=              "<i class=\"fa fa-eye\"></i>";
        $content .=          "</a>&nbsp;";
        $content .=          "<a href=\"#\" class=\"btn-xs tooltips\" tooltip-placement=\"top\" tooltip=\"Edit\">";
        $content .=              "<i class=\"fa fa-edit\"></i>";
        $content .=          "</a>&nbsp;";
        $content .=          "<a href=\"#\" onClick=\"return confirm('Are you sure you want to delete?')\" class=\"btn-xs tooltips\" tooltip-placement=\"top\" tooltip=\"Remove\">";
        $content .=              "<i class=\"fa fa-times fa fa-white\"></i>";
        $content .=          "</a>";
        $content .=      "</td>";
        $content .= " </tr>\n";

        echo $content;
        $count++;
    }
}

function displayTableHeadClubsAdmin()
{
    $content = "<tr class=\"text-center\">";
    $content .=   "<th style=\"width:20%;\">S.No.</th>";
    $content .=   "<th style=\"width:60%;\">Club&nbsp;Name</th>";
    $content .=   "<th style=\"width:20%;\" class=\"hidden-xs\">Options</th>";
    $content .= "</tr>\n";
    echo $content;
}

function displayClubsAdmin()
{
    global $con;
    $sel_query = "SELECT * FROM clubs";
    $result = mysqli_query($con, $sel_query);
    $count = 1;
    while ($row = mysqli_fetch_assoc($result)) {

        $content = "<tr class=\"text-center\">";
        $content .=      "<td>" . $count . "</td>";
        $content .=      "<td>" . $row["c_name"] . "</td>";
        $content .=      "<td>";
        $content .=          "<a href=\"#\" class=\"btn-xs tooltips\" tooltip-placement=\"top\" tooltip=\"Edit\">";
        $content .=              "<i class=\"fa fa-eye\"></i>";
        $content .=          "</a>&nbsp;";
        $content .=          "<a href=\"#\" class=\"btn-xs tooltips\" tooltip-placement=\"top\" tooltip=\"Edit\">";
        $content .=              "<i class=\"fa fa-edit\"></i>";
        $content .=          "</a>&nbsp;";
        $content .=          "<a href=\"#\" onClick=\"return confirm('Are you sure you want to delete?')\" class=\"btn-xs tooltips\" tooltip-placement=\"top\" tooltip=\"Remove\">";
        $content .=              "<i class=\"fa fa-times fa fa-white\"></i>";
        $content .=          "</a>";
        $content .=      "</td>";
        $content .= " </tr>\n";

        echo $content;
        $count++;
    }
}

function displayTableHeadDegreesAdmin()
{
    $content = "<tr class=\"text-center\">";
    $content .=   "<th style=\"width:20%;\">S.No.</th>";
    $content .=   "<th style=\"width:20%;\">Degree</th>";
    $content .=   "<th style=\"width:40%;\">Full Form</th>";
    $content .=   "<th style=\"width:20%;\" class=\"hidden-xs\">Options</th>";
    $content .= "</tr>\n";
    echo $content;
}

function displayDegreesAdmin()
{
    global $con;
    $sel_query = "SELECT * FROM degrees";
    $result = mysqli_query($con, $sel_query);
    $count = 1;
    while ($row = mysqli_fetch_assoc($result)) {

        $content = "<tr class=\"text-center\">";
        $content .=      "<td>" . $count . "</td>";
        $content .=      "<td>" . $row["s_degree"] . "</td>";
        $content .=      "<td>" . $row["deg_fullname"] . "</td>";
        $content .=      "<td>";
        $content .=          "<a href=\"edit-degrees.php?included={$row['id']}\" class=\"btn-xs tooltips\" tooltip-placement=\"top\" tooltip=\"Edit\">";
        $content .=              "<i class=\"fa fa-edit\"></i>";
        $content .=          "</a>&nbsp;";
        $content .=          "<a href=\"#\" onClick=\"return confirm('Are you sure you want to delete?')\" class=\"btn-xs tooltips\" tooltip-placement=\"top\" tooltip=\"Remove\">";
        $content .=              "<i class=\"fa fa-times fa fa-white\"></i>";
        $content .=          "</a>";
        $content .=      "</td>";
        $content .= " </tr>\n";

        echo $content;
        $count++;
    }
}

function displayTableHeadDegreeTypesAdmin()
{
    $content = "<tr class=\"text-center\">";
    $content .=   "<th style=\"width:20%;\">S.No.</th>";
    $content .=   "<th style=\"width:20%;\">Degree Code</th>";
    $content .=   "<th style=\"width:40%;\">Degree Type</th>";
    $content .=   "<th style=\"width:20%;\" class=\"hidden-xs\">Options</th>";
    $content .= "</tr>\n";
    echo $content;
}

function displayDegreeTypesAdmin()
{
    global $con;
    $sel_query = "SELECT * FROM degree_types";
    $result = mysqli_query($con, $sel_query);
    $count = 1;
    while ($row = mysqli_fetch_assoc($result)) {

        $content = "<tr class=\"text-center\">";
        $content .=      "<td>" . $count . "</td>";
        $content .=      "<td>" . $row["deg_code"] . "</td>";
        $content .=      "<td>" . $row["deg_type_name"] . "</td>";
        $content .=      "<td>";
        $content .=          "<a href=\"edit-degree-type.php?included={$row['id']}\" class=\"btn-xs tooltips\" tooltip-placement=\"top\" tooltip=\"Edit\">";
        $content .=              "<i class=\"fa fa-edit\"></i>";
        $content .=          "</a>&nbsp;";
        $content .=          "<a href=\"#\" onClick=\"return confirm('Are you sure you want to delete?')\" class=\"btn-xs tooltips\" tooltip-placement=\"top\" tooltip=\"Remove\">";
        $content .=              "<i class=\"fa fa-times fa fa-white\"></i>";
        $content .=          "</a>";
        $content .=      "</td>";
        $content .= " </tr>\n";

        echo $content;
        $count++;
    }
}

function displayTableHeadSchoolsAdmin()
{
    $content = "<tr class=\"text-center\">";
    $content .=   "<th style=\"width:20%;\">S.No.</th>";
    $content .=   "<th style=\"width:20%;\">School Code</th>";
    $content .=   "<th style=\"width:40%;\">School Name</th>";
    $content .=   "<th style=\"width:20%;\" class=\"hidden-xs\">Options</th>";
    $content .= "</tr>\n";
    echo $content;
}

function displaySchoolsAdmin()
{
    global $con;
    $sel_query = "SELECT * FROM s_schools";
    $result = mysqli_query($con, $sel_query);
    $count = 1;
    while ($row = mysqli_fetch_assoc($result)) {

        $content = "<tr class=\"text-center\">";
        $content .=      "<td>" . $count . "</td>";
        $content .=      "<td>" . $row["s_code"] . "</td>";
        $content .=      "<td>" . $row["sch_name"] . "</td>";
        $content .=      "<td>";
        $content .=          "<a href=\"edit-school.php?included={$row['id']}\" class=\"btn-xs tooltips\" tooltip-placement=\"top\" tooltip=\"Edit\">";
        $content .=              "<i class=\"fa fa-edit\"></i>";
        $content .=          "</a>&nbsp;";
        $content .=          "<a href=\"#\" onClick=\"return confirm('Are you sure you want to delete?')\" class=\"btn-xs tooltips\" tooltip-placement=\"top\" tooltip=\"Remove\">";
        $content .=              "<i class=\"fa fa-times fa fa-white\"></i>";
        $content .=          "</a>";
        $content .=      "</td>";
        $content .= " </tr>\n";

        echo $content;
        $count++;
    }
}

function showBatches($name)
{
    global $con;

    $sel_query = "SELECT * FROM batches";
    $result = mysqli_query($con, $sel_query);
    echo "<select class=\"form-control\" name=\"" . $name . "\">";
    echo "<option>--&nbsp;Select&nbsp;Batch--</option>\n";

    while ($row = mysqli_fetch_assoc($result)) {
        $content = "<option value=\"" . $row["id"] . "\">" . $row["batch"] . "</option>\n";
        echo $content;
    }
    echo "</select>\n";
}

?>
