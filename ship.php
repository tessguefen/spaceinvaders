<?php
$x = 13;
$y = 8;

// Image
$gd = imagecreatetruecolor($x, $y);
// Colors
$green = imagecolorallocate($gd, 32, 255, 32);

// Gun (Middle)
imagesetpixel($gd, 6, 0, $green);
imageline($gd, 5, 1, 7, 1, $green);
imageline($gd, 5, 2, 7, 2, $green);
imageline($gd, 1, 3, 11, 3, $green);
imageline($gd, 0, 4, 12, 4, $green);
imageline($gd, 0, 5, 12, 5, $green);
imageline($gd, 0, 6, 12, 6, $green);
imageline($gd, 0, 7, 12, 7, $green);

// Making the image a PNG
header('Content-Type: image/png');
imagepng($gd);