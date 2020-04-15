<?php 

function field($fsize,$fclass,$fieldname,$vsize,$vclass,$fieldvalue)
{
    $content  =	 "<div class=\"col-md-$fsize col-sm-4 $fclass\">";
    $content .=  "$fieldname";
    $content .=	 "</div>";
    $content .=	 "<div class=\"col-md-$vsize col-sm-8 $vclass\">";
    $content .=  "$fieldvalue";
    $content .=	 "</div>";
    return $content;
}
function field_1($rc,$fsize,$fclass,$fieldname,$vsize,$vclass,$fieldvalue)	
{
    $content  =  "<div class=\"row $rc\">";
    $content .= field($fsize,$fclass,$fieldname,$vsize,$vclass,$fieldvalue);    
    $content .=	"</div>";
    echo $content;
}

function field_2($rc,$f1size,$v1size,$f2size,$v2size,$f1class,$f2class,$v1class,$v2class,$f1,$v1,$f2,$v2)	
{
    $content  =  "<div class=\"row $rc\">";
    $content .= "\n";
    $content .= field($f1size,$f1class,$f1,$v1size,$v1class,$v1);
    $content .= "\n";
    $content .= field($f2size,$f2class,$f2,$v2size,$v2class,$v2);
    $content .= "\n";
    $content .=	"</div>";
    echo $content;
}

function field_3($rc,$f1size,$v1size,$f2size,$v2size,$f3size,$v3size,$f1class,$f2class,$f3class,$v1class,$v2class,$v3class,$f1,$v1,$f2,$v2,$f3,$v3)	
{
    $content  =  "<div class=\"row $rc\">";
    $content .= "\n";
    $content .= field($f1size,$f1class,$f1,$v1size,$v1class,$v1);
    $content .= "\n";
    $content .= field($f2size,$f2class,$f2,$v2size,$v2class,$v2);
    $content .= "\n";
    $content .= field($f3size,$f3class,$f3,$v3size,$v3class,$v3);    
    $content .= "\n";
    $content .=	"</div>";
    echo $content;
}
?>


<?php include('include/functions.php'); ?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Hod Dashboard</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <style>
    .card-body{
        line-height: 40px;
    }
</style>
</head>

<body id="page-top">
    <div id="wrapper">
        <?php include('include/sidebar.php'); ?>

    <div class="d-flex flex-column" id="content-wrapper">
        <div id="content">

            <?php include('include/header.php'); ?>

            <div class="container-fluid">
                <div class="d-sm-flex justify-content-between align-items-center mb-4">
                    <h3 class="text-dark mb-0">Dashboard</h3>
                </div>
                <div class="">

                </div>
                
            </div>
        </div>

        <?php include('include/footer.php'); ?>
    
    </div><a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a>
</div>
<script src="assets/js/jquery.min.js"></script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.js"></script>
<script src="assets/js/theme.js"></script>
</body>

</html>