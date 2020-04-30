<?php 
$database = 'rksclg';
$host = 'localhost';
$user = 'root';
$pass = '';
// try to conncet to database
$con = mysqli_connect($host,$user,$pass,$database);

function fetchFrom($table,$regno)
{
    global $con;
    $regno=(int)$regno;
    $query = "SELECT * FROM ".$table." WHERE reg_no=".$regno;        
    $result = mysqli_query($con,$query) or die(mysqli_error($con));
    $row = mysqli_fetch_array($result);                       
    return $row;
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

function myDateFormat($dateTime)
{
    $myDate = "";
    if(!is_null($dateTime)) {
        $log = date_create($dateTime);
        $myDate = date_format($log, 'd-m-Y g:i:s a');        
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
    $content .=      "<td>".$row["uid"]."</td>";
    $content .=      "<td>".$row["username"]."</td>";    
    $content .=      "<td>".myDateFormat($row["loginTime"])."</td>";
    $content .=      "<td>".myDateFormat($row["logout"])."</td>";
    $content .=      "<td>".statusText($row["status"])."</td>";
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
    $count++; }
}

?>