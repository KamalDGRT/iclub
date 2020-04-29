<?php 
$database = 'mtc';
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

function displayTableHeadUserLogs()
{
    $content = "<tr class=\"text-center\">";
    $content .=   "<th style=\"width:5%;\">#</th>";
    $content .=   "<th style=\"width:20%;\">User ID</th>";
    $content .=   "<th style=\"width:15%;\">User Name</th>";
    $content .=   "<th style=\"width:15%;\">Login Time</th>";
    $content .=   "<th style=\"width:15%;\">Logout Time</th>";
    $content .=   "<th style=\"width:15%;\">Status</th>";
    $content .=   "<th style=\"width:15%;\" class=\"hidden-xs\">Action</th>";
    $content .= "</tr>\n";
    echo $content;
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
    $content .=      "<td>".$row["loginTime"]."</td>";
    $content .=      "<td>".$row["logout"]."</td>";
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