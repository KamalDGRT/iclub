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