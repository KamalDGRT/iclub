<?php
include_once('dental/include/config.php');
if (isset($_POST['submit'])) {
	$name = $_POST['fullname'];
    $email = $_POST['emailid'];
    $subject = $_POST['mailsubject'];
	$mobileno = $_POST['mobileno'];
	$dscrption = $_POST['description'];
	$query = mysqli_query($con, "INSERT INTO tblcontactus(fullname,email,subject,contactno,message) VALUES ('$name','$email','$subject','$mobileno','$dscrption')");
	echo "<script>alert('Your information succesfully submitted');</script>";
	echo "<script>window.location.href ='contact-us.php'</script>";
}
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Contact Us - Sathyabama Dental College</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,700,700i,600,600i">
    <link rel="stylesheet" href="assets/fonts/simple-line-icons.min.css">
    <link rel="stylesheet" href="assets/css/baguetteBox.min.css">
    <link rel="stylesheet" href="assets/css/inputstyle.css">
</head>

<body>
    <?php include('dental/include/header.php'); ?>
    <main class="page contact-us-page">
        <section class="clean-block clean-form dark">
            <div class="container">
                <div class="block-heading">
                    <h2 class="text-info">Contact Us</h2>
                    <p></p>
                </div>
                <form name="contactus" method="post">
                    <div class="form-group">
                        <label>Name</label>
                        <input class="form-control" type="text" name="fullname" required="true">
                    </div>
                    <div class="form-group">
                        <label>Subject</label>
                        <input class="form-control" type="text" name="mailsubject" required="true">
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input class="form-control" type="email" name="emailid" required="ture">
                    </div>
                    <div class="form-group">
                        <label>Phone Number</label>
                        <input class="form-control" type="text" name="mobileno" required="true" >
                    </div>
                    <div class="form-group">
                        <label>Message</label>
                        <textarea class="form-control" name="description" required="true"></textarea>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-primary btn-block" type="submit" name="submit">Send</button>
                    </div>
                </form>
            </div>
        </section>
    </main>

    <?php include('dental/include/footer.php'); ?>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/baguetteBox.min.js"></script>
    <script src="assets/js/theme.js"></script>
</body>

</html>