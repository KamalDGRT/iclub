<?php
include_once('clg/include/config.php');
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
    <title>Contact Us - Sathyabama Institute of Science and Technology</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,700,700i,600,600i">
    <link rel="stylesheet" href="assets/fonts/simple-line-icons.min.css">
    <link rel="stylesheet" href="assets/css/baguetteBox.min.css">
    <link rel="stylesheet" href="assets/css/inputstyle.css">
</head>

<body>    
    
    <nav class="navbar navbar-light navbar-expand-lg fixed-top bg-white clean-navbar">
        <div class="container">
            <a class="navbar-brand logo" href="index.php">Sathyabama</a>
            <button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1">
                <span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span>
            </button>
            <div
                class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item" role="presentation"><a class="nav-link" href="index.php">Home</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="#">Features</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="about-us.php">About Us</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="clg/">LogIn</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link active" href="contact-us.php">Contact Us</a></li>
                </ul>
            </div>
        </div>
    </nav>
    
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
                        <input class="form-control" type="text" name="mobileno">
                    </div>
                    <div class="form-group">
                        <label>Message</label>
                        <textarea class="form-control" name="description" required="true"></textarea>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-primary btn-block" type="submit" name="submit">Send</button>
                    </div>
                </form><br>

                <div class="text-center">
                    <p>Fill the feedback form <a href="https://bit.ly/sist-feedback" target="_blank">here</a></p>                
                </div>
            </div>
        </section>
    </main>

    <?php include('clg/include/footer.php'); ?>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/baguetteBox.min.js"></script>
    <script src="assets/js/theme.js"></script>
</body>

</html>