<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Sathyabama</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,700,700i,600,600i">
    <link rel="stylesheet" href="assets/fonts/simple-line-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css">
    <link rel="stylesheet" href="assets/css/baguetteBox.min.css">
</head>

<body>

    <?php include('clg/include/header.php'); ?>    

    <main class="page">
        <section class="clean-block slider">
            <div class="container">
                
                <div class="carousel slide" data-ride="carousel" id="carousel-1">
                    <div class="carousel-inner" role="listbox">
                        <div class="carousel-item active">
                            <img class="w-100 d-block" src="assets/img/college/image1.jpg" alt="Slide Image">
                        </div>
                        <div class="carousel-item">
                            <img class="w-100 d-block" src="assets/img/college/image2.jpg" alt="Slide Image">
                        </div>
                        <div class="carousel-item">
                            <img class="w-100 d-block" src="assets/img/college/image3.jpg" alt="Slide Image">
                        </div>
                        <div class="carousel-item">
                            <img class="w-100 d-block" src="assets/img/college/image4.jpg" alt="Slide Image">
                        </div>
                    </div>
                    <div>
                        <a class="carousel-control-prev" href="#carousel-1" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carousel-1" role="button" data-slide="next">
                            <span class="carousel-control-next-icon"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>

                    <ol class="carousel-indicators">
                        <li data-target="#carousel-1" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-1" data-slide-to="1"></li>
                        <li data-target="#carousel-1" data-slide-to="2"></li>
                        <li data-target="#carousel-1" data-slide-to="3"></li>
                    </ol>
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