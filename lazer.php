<?php
$x = 1;
$y = 3;

// Image
$gd = imagecreatetruecolor($x, $y);
// Colors
$green = imagecolorallocate($gd, 32, 255, 32);

// Gun (Middle)
imageline($gd, 0, 0, 0, 3, $green);

// Making the image a PNG
header('Content-Type: image/png');
imagepng($gd);