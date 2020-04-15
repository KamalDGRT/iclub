<?php 

function myCard($hrefLink,$textStyling,$cardValue,$firstDiv,$cardBodyDiv,$iconClass)
{
    $content  =	 "<div class=\"col-sm-12 col-md-6 col-xl-3 mb-4\">";
    $content .=    "<a href=$hrefLink style=\"text-decoration: none;\">";
    $content .=      "<div class=\"$firstDiv\">";
    $content .=        "<div class=\"$cardBodyDiv\">";
    $content .=          "<div class=\"row align-items-center no-gutters\">";
    $content .=             "<div class=\"col mr-2\">";
    $content .=               "<div class=\"$textStyling mb-0\">";
    $content .=                 "<span>$cardValue</span>";
    $content .=               "</div>";
    $content .=             "</div>";
    $content .=             "<div class=\"col-auto\">";
    $content .=               "<i class=\"$iconClass\"></i>";
    $content .=             "</div>";
    $content .=           "</div>";
    $content .=        "</div>";
    $content .=      "</div>";
    $content .=    "</a>";                                
    $content .=  "</div>\n";                            
    echo $content;
}

?>
