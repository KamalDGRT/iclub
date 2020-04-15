<?php function fetchFrom($table,$regno)
{
    global $con;
    $regno=(int)$regno;
    $query = "SELECT * FROM ".$table." WHERE reg_no=".$regno;        
    $result = mysqli_query($con,$query) or die(mysqli_error($con));
    $row = mysqli_fetch_array($result);                       
    return $row;
}

?>