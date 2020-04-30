<?php
session_start();
include("include/config.php");
if (isset($_POST['submit'])) {

    $ret = mysqli_query($con, "SELECT * FROM users WHERE email='" . $_POST['username'] . "' and password='" . md5($_POST['password']) . "'");
    $num = mysqli_fetch_array($ret);
    if ($num > 0) {
        $_SESSION['login'] = $_POST['username'];
        $_SESSION['id'] = $num['id'];
        $_SESSION['role'] = $num['role'];
        $_SESSION['fullName'] = $num['fullName'];
        $host = $_SERVER['HTTP_HOST'];
        $uip = $_SERVER['REMOTE_ADDR'];
        $status = 1;
        // For storing log if user login successfull
        $log = mysqli_query($con, "insert into userlog(uid,username,userip,status) values('" . $_SESSION['id'] . "','" . $_SESSION['login'] . "','$uip','$status')");
        if ($_SESSION['role'] == "admin")
            header("location:admin/");
        else if ($_SESSION['role'] == "student")
            header("location:student/");
    } else {
        // For stroing log if user login unsuccessfull
        $_SESSION['login'] = $_POST['username'];
        $uip = $_SERVER['REMOTE_ADDR'];
        $status = 0;
        mysqli_query($con, "insert into userlog(username,userip,status) values('" . $_SESSION['login'] . "','$uip','$status')");
        $_SESSION['errmsg'] = "Invalid username or password";
        $extra = "index.php";
        $host  = $_SERVER['HTTP_HOST'];
        $uri  = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
        header("location:http://$host$uri/$extra");
    }
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Login - Sathyabama</title>
    <link rel="icon" type="image/ico" href="assets/img/college/logo.jpg" />
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,700,700i,600,600i">
    <link rel="stylesheet" href="assets/fonts/simple-line-icons.min.css">
    <link rel="stylesheet" href="assets/css/baguetteBox.min.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body>

    <nav class="navbar navbar-light navbar-expand-lg fixed-top bg-white clean-navbar">
        <div class="container"><a class="navbar-brand logo" href="../index.php">Sathyabama</a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item" role="presentation"><a class="nav-link" href="../index.php">Home</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="#">Features</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="../about-us.php">About Us</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link active" href="index.php">LogIn</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="../contact-us.php">Contact Us</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <main class="page contact-us-page">
        <section class="clean-block clean-form dark">
            <div class="container-fluid">
                <div class="block-heading">
                    <h2 class="text-info">Log-In</h2>
                    <p></p>
                </div>
                <form class="form-login" method="post">
                    <fieldset>
                        <legend>
                            Sign in to your account
                        </legend>
                        <p>
                            Please enter your email and password to log in.<br />
                            <span style="color:red;">
                                <?php if (isset($_SESSION['errmsg'])) {
                                    echo htmlentities($_SESSION['errmsg']);
                                }
                                ?>
                            </span>
                        </p>
                        <div class="form-group">
                            <span class="input-icon">
                                <input type="text" class="form-control" name="username" placeholder="Email Address" required>
                                <i class="fa fa-user"></i> </span>
                        </div>
                        <div class="form-group form-actions">
                            <span class="input-icon">
                                <input type="password" class="form-control password" name="password" placeholder="Password" required>
                                <i class="fa fa-lock"></i>
                            </span><a href="#">
                                Forgot Password ?
                            </a>
                        </div>
                        <div class="form-actions">
                            <button type="submit" class="btn btn-primary btn-block" name="submit">
                                Log-In <i class="fa fa-arrow-circle-right"></i>
                            </button>
                        </div><br><br>
                        <div class="new-account">
                            Don't have an account yet?
                            <a href="#">
                                Create an account
                            </a>
                        </div>
                    </fieldset>
                </form>

            </div>
        </section>
    </main>
    <?php include('include/footer.php'); ?>

    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>    
    <script src="assets/js/baguetteBox.min.js"></script>
    <script src="assets/js/theme.js"></script>
</body>

</html>