<?php
$image=imagecreatefrompng('red.png');
//imagefilter($image, IMG_FILTER_COLORIZE,255,0,0);
imagefilter($image, IMG_FILTER_NEGATE);
imagepng($image,'test_out.png');
