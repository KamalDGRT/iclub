<?php
session_start();
include('include/config.php');
$_SESSION['login']=="";
date_default_timezone_set('Asia/Kolkata');
$ldate=date( 'Y-m-d H:i:s');
mysqli_query($con,"UPDATE userlog  SET logout = '$ldate' WHERE uid = '".$_SESSION['id']."' ORDER BY id DESC LIMIT 1");
session_unset();
session_destroy();
$_SESSION['errmsg']="You have successfully logout";
?>
<script language="javascript">
alert('You have successfully logged out.');
document.location="../index.php";
</script>