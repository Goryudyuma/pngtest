<?php

$image = new Imagick('triangle.png');
//$clut = new Imagick();
//$clut->newImage(1, 1, '#FF0000');
//$image->clutImage($clut, imagick::CHANNEL_RED);
//$image->paintOpaqueImage('red','green',1);
//$image->floodfillPaintImage('#0000FF', 1, $image->getImagePixelColor(1, 1), 1, 1, false);
$image->paintOpaqueImage('#FFFFFF', '#00FFFF', 1);
$image->writeImage('test_out.png');
?>
