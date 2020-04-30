<?php
$database = 'rksclg';
$host = 'localhost';
$user = 'root';
$pass = '';
// try to conncet to database
$con = mysqli_connect($host,$user,$pass,$database);

function proper_date($d1)
{
    global $con;
    $sql = "SELECT DATE_FORMAT('$d1', \"%d/%m/%Y\") as dd";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_assoc($result);
    $date = $row["dd"];
    return $date;
}

// escape string
function e($val)
{
    global $con;
    return mysqli_real_escape_string($con, trim($val));
}

function fetchFrom($table,$id)
{
    global $con;
    $id=(int)$id;
    $query = "SELECT * FROM ".$table." WHERE id=".$id;        
    $result = mysqli_query($con,$query) or die(mysqli_error($con));
    $row = mysqli_fetch_array($result);                       
    return $row;
}

function fetchName($id)
{
    global $con;
    $id=(int)$id;
    $query = "SELECT fullName FROM users WHERE id=".$id;        
    $result = mysqli_query($con,$query) or die(mysqli_error($con));
    $row = mysqli_fetch_array($result);                       
    return $row['fullName'];
}

function myDateFormat($dateTime,$format)
{
    $myDate = "";
    if(!is_null($dateTime)) {
        $log = date_create($dateTime);
        $myDate = date_format($log,$format);        
    }
    return $myDate;
}

function statusText($status)
{
    $message = "";
    if($status){
        $message = "Successful";
    } else {
        $message = "Unsuccessful";
    }
    return $message;
}

function meetingStatusText($status)
{
    $message = "";
    if($status==1){
        $message = "Held";
    } elseif($status==2) {
        $message = "Cancelled";
    } elseif($status==3) {
        $message = "Upcoming";
    }
    return $message;
}

function courseTypeText($status)
{
    $message = "";
    if($status==2){
        $message = "Practical";
    } elseif($status==1) {
        $message = "Theory";
    }
    return $message;
}

function courseStatusText($status)
{
    $message = "";
    if($status==1){
        $message = "Active";
    } elseif($status==2) {
        $message = "Removed";
    }
    return $message;
}

function displayTableHeadMeetingStudent()
{
    $content = "<tr class=\"text-center\">";
    $content .=   "<th style=\"width:15%;\">Date</th>";
    $content .=   "<th style=\"width:25%;\">Course&nbsp;Name</th>";
    $content .=   "<th style=\"width:15%;\">Meeting&nbsp;Host</th>";
    $content .=   "<th style=\"width:15%;\">Meeting&nbsp;Time</th>";
    $content .=   "<th style=\"width:15%;\">Platform</th>";
    $content .=   "<th style=\"width:10%;\">Meeting&nbsp;ID</th>";
    $content .=   "<th style=\"width:10%;\">Password</th>";
    $content .=   "<th style=\"width:10%;\">Status</th>";
    $content .= "</tr>\n";
    echo $content;
}

function displayMeetingsStudent()
{
    global $con;
    $sel_query = "SELECT * FROM meetings";
    $result = mysqli_query($con, $sel_query);

    while ($row = mysqli_fetch_assoc($result)) {

    $content = "<tr class=\"text-center\">";    
    $content .=      "<td>".myDateFormat($row["m_date"],'d-m-Y')."</td>";
    $content .=      "<td>".$row["course_name"]."</td>";    
    $content .=      "<td>".$row["m_host"]."</td>";
    $content .=      "<td>".$row["m_timing"]."</td>";
    $content .=      "<td>".$row["m_platform"]."</td>";
    $content .=      "<td>".$row["meeting_id"]."</td>";
    $content .=      "<td>".$row["m_password"]."</td>";
    $content .=      "<td>".meetingStatusText($row["m_status"])."</td>";        
    $content .= " </tr>\n";

    echo $content;
    }
}

function displayTableHeadCoursesStudent()
{
    $content = "<tr class=\"text-center\">";
    $content .=   "<th style=\"width:15%;\">S.No.</th>";
    $content .=   "<th style=\"width:15%;\">Course&nbsp;Code</th>";
    $content .=   "<th style=\"width:35%;\">Course&nbsp;Name</th>";
    $content .=   "<th style=\"width:15%;\">Course&nbsp;Type</th>";
    $content .=   "<th style=\"width:10%;\">Status</th>";    
    $content .= "</tr>\n";
    echo $content;
}

function displayCoursesStudent()
{
    global $con;
    $sel_query = "SELECT * FROM courses";
    $result = mysqli_query($con, $sel_query);
    $count = 1;
    while ($row = mysqli_fetch_assoc($result)) {

    $content = "<tr class=\"text-center\">";
    $content .=      "<td>".$count."</td>";
    $content .=      "<td>".$row["course_code"]."</td>";
    $content .=      "<td>".$row["course_name"]."</td>";
    $content .=      "<td>".courseTypeText($row["course_type"])."</td>";
    $content .=      "<td>".courseStatusText($row["status"])."</td>";    
    $content .= " </tr>\n";

    echo $content;
    $count++;
    }
}

?>