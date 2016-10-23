<?php
$x = 217;
$y = 248;

// Font URL
$font = 'font/invadeafont-webfont.ttf';

// Image
$gd = imagecreatetruecolor($x, $y);

// Colors
$black = imagecolorallocate($gd, 0, 0, 0);
$white = imagecolorallocate($gd, 255, 255, 255);
$green = imagecolorallocate($gd, 32, 255, 32);
$trans = imagecolorallocatealpha($gd, 0, 0, 0, 127);
imagefill($gd, 0, 0, $trans);
imagesavealpha($gd, TRUE);

// Row 1
for ($i=0;$i<11;$i++) {
	$a = $i * 16;
	imageline($gd, 37+$a, 64, 38+$a, 64, $white);
	imageline($gd, 36+$a, 65, 39+$a, 65, $white);
	imageline($gd, 35+$a, 66, 40+$a, 66, $white);
	imageline($gd, 34+$a, 67, 41+$a, 67, $white);
	imageline($gd, 34+$a, 68, 41+$a, 68, $white);
	imagesetpixel($gd, 36+$a, 67, $black);
	imagesetpixel($gd, 39+$a, 67, $black);
	imagesetpixel($gd, 39+$a, 69, $white);
	imagesetpixel($gd, 36+$a, 69, $white);
	imagesetpixel($gd, 35+$a, 70, $white);
	imagesetpixel($gd, 34+$a, 71, $white);
	imagesetpixel($gd, 36+$a, 71, $white);
	imagesetpixel($gd, 39+$a, 71, $white);
	imagesetpixel($gd, 41+$a, 71, $white);
	imagesetpixel($gd, 40+$a, 70, $white);
	imageline($gd, 38+$a, 70, 37+$a, 70, $white);
};

// Row 2 (Column 1)
for ($i=0;$i<6;$i++) {
	$a = $i * 16;
	if ($i == 2) continue;
	imagesetpixel($gd, 33+$a, 80, $white);
	imagesetpixel($gd, 34+$a, 81, $white);
	imagesetpixel($gd, 39+$a, 80, $white);
	imagesetpixel($gd, 38+$a, 81, $white);
	imageline($gd, 33+$a, 82, 39+$a, 82, $white);
	imageline($gd, 32+$a, 83, 40+$a, 83, $white);
	imageline($gd, 31+$a, 84, 41+$a, 84, $white);
	imagesetpixel($gd, 34+$a, 83, $black);
	imagesetpixel($gd, 38+$a, 83, $black);
	imagesetpixel($gd, 31+$a, 85, $white);
	imagesetpixel($gd, 31+$a, 86, $white);
	imagesetpixel($gd, 41+$a, 85, $white);
	imagesetpixel($gd, 41+$a, 86, $white);
	imageline($gd, 33+$a, 85, 39+$a, 85, $white);
	imagesetpixel($gd, 33+$a, 86, $white);
	imagesetpixel($gd, 39+$a, 86, $white);
	imageline($gd, 34+$a, 87, 35+$a, 87, $white);
	imageline($gd, 37+$a, 87, 38+$a, 87, $white);
};

// Row 2 (Column 2)
for ($i=0;$i<5;$i++) {
	$a = $i * 16;
	imagesetpixel($gd, 131+$a, 80, $white);
	imagesetpixel($gd, 132+$a, 81, $white);
	imageline($gd, 129+$a, 81, 129+$a, 84, $white);
	imageline($gd, 130+$a, 83, 130+$a, 85, $white);
	imageline($gd, 131+$a, 82, 131+$a, 86, $white);
	imagesetpixel($gd, 130+$a, 87, $white);
	imageline($gd, 131+$a, 82, 137+$a, 82, $white);
	imageline($gd, 131+$a, 83, 138+$a, 83, $white);
	imageline($gd, 131+$a, 84, 138+$a, 84, $white);
	imageline($gd, 131+$a, 85, 138+$a, 85, $white);
	imageline($gd, 139+$a, 84, 139+$a, 81, $white);
	imagesetpixel($gd, 137+$a, 80, $white);
	imagesetpixel($gd, 136+$a, 81, $white);
	imagesetpixel($gd, 137+$a, 86, $white);
	imagesetpixel($gd, 138+$a, 87, $white);
	imagesetpixel($gd, 136+$a, 83, $black);
	imagesetpixel($gd, 132+$a, 83, $black);
};

// Row 3
for ($i=0;$i<11;$i++) {
	$a = $i * 16;
	imagesetpixel($gd, 33+$a, 96, $white);
	imagesetpixel($gd, 34+$a, 97, $white);
	imagesetpixel($gd, 39+$a, 96, $white);
	imagesetpixel($gd, 38+$a, 97, $white);
	imageline($gd, 33+$a, 98, 39+$a, 98, $white);
	imageline($gd, 32+$a, 99, 40+$a, 99, $white);
	imageline($gd, 31+$a, 100, 41+$a, 100, $white);
	imagesetpixel($gd, 34+$a, 99, $black);
	imagesetpixel($gd, 38+$a, 99, $black);
	imagesetpixel($gd, 31+$a, 101, $white);
	imagesetpixel($gd, 31+$a, 102, $white);
	imagesetpixel($gd, 41+$a, 101, $white);
	imagesetpixel($gd, 41+$a, 102, $white);
	imageline($gd, 33+$a, 101, 39+$a, 101, $white);
	imagesetpixel($gd, 33+$a, 102, $white);
	imagesetpixel($gd, 39+$a, 102, $white);
	imageline($gd, 34+$a, 103, 35+$a, 103, $white);
	imageline($gd, 37+$a, 103, 38+$a, 103, $white);
};
// Row 4
for ($i=0;$i<11;$i++) {
	$a = $i * 16;
	if ($i == 4) continue;
	if ($i == 7) continue;
	imageline($gd, 34+$a, 112, 37+$a, 112, $white);
	imageline($gd, 31+$a, 113, 40+$a, 113, $white);
	imageline($gd, 30+$a, 114, 41+$a, 114, $white);
	imageline($gd, 30+$a, 115, 41+$a, 115, $white);
	imageline($gd, 30+$a, 116, 41+$a, 116, $white);
	imageline($gd, 33+$a, 115, 34+$a, 115, $black);
	imageline($gd, 38+$a, 115, 37+$a, 115, $black);
	imageline($gd, 32+$a, 117, 39+$a, 117, $white);
	imageline($gd, 35+$a, 117, 36+$a, 117, $black);
	imageline($gd, 35+$a, 118, 36+$a, 118, $white);
	imageline($gd, 32+$a, 119, 33+$a, 119, $white);
	imageline($gd, 38+$a, 119, 39+$a, 119, $white);
	imageline($gd, 31+$a, 118, 32+$a, 118, $white);
	imageline($gd, 39+$a, 118, 40+$a, 118, $white);
};
// Row 5
for ($i=0;$i<11;$i++) {
	$a = $i * 16;
	$b = 16;
	if ($i == 4) continue;
	if ($i == 5) continue;
	if ($i == 7) continue;
	imageline($gd, 34+$a, 112+$b, 37+$a, 112+$b, $white);
	imageline($gd, 31+$a, 113+$b, 40+$a, 113+$b, $white);
	imageline($gd, 30+$a, 114+$b, 41+$a, 114+$b, $white);
	imageline($gd, 30+$a, 115+$b, 41+$a, 115+$b, $white);
	imageline($gd, 30+$a, 116+$b, 41+$a, 116+$b, $white);
	imageline($gd, 33+$a, 115+$b, 34+$a, 115+$b, $black);
	imageline($gd, 38+$a, 115+$b, 37+$a, 115+$b, $black);
	imageline($gd, 32+$a, 117+$b, 39+$a, 117+$b, $white);
	imageline($gd, 35+$a, 117+$b, 36+$a, 117+$b, $black);
	imageline($gd, 35+$a, 118+$b, 36+$a, 118+$b, $white);
	imageline($gd, 32+$a, 119+$b, 33+$a, 119+$b, $white);
	imageline($gd, 38+$a, 119+$b, 39+$a, 119+$b, $white);
	imageline($gd, 31+$a, 118+$b, 32+$a, 118+$b, $white);
	imageline($gd, 39+$a, 118+$b, 40+$a, 118+$b, $white);
};

// Bottom Green Line
imageline($gd, 0, 231, 217, 231, $green);

// Hits!
imagesetpixel($gd, 66, 231, $black);
imagesetpixel($gd, 67, 230, $green);
imagesetpixel($gd, 67, 228, $green);
imagesetpixel($gd, 67, 225, $green);
imagesetpixel($gd, 71, 225, $green);
imagesetpixel($gd, 69, 224, $green);
imagesetpixel($gd, 72, 226, $green);
imageline($gd, 69, 226, 70, 226, $green);
imageline($gd, 68, 227, 71, 227, $green);
imageline($gd, 69, 228, 71, 228, $green);
imageline($gd, 68, 229, 72, 229, $green);
imageline($gd, 69, 230, 71, 230, $green);
imagesetpixel($gd, 106, 231, $black);
imagesetpixel($gd, 108, 231, $black); 									
imagesetpixel($gd, 110, 231, $black);
imagesetpixel($gd, 198, 231, $black);
imagesetpixel($gd, 200, 231, $black);
imagesetpixel($gd, 202, 231, $black);
// Shields!
for ($i=0;$i<4;$i++) {
	$a = $i * 45;
	imagefilledrectangle($gd, 30+$a, 188, 51+$a, 199, $green); 
	imageline($gd, 31+$a, 187, 50+$a, 187, $green);
	imageline($gd, 32+$a, 186, 49+$a, 186, $green);
	imageline($gd, 33+$a, 185, 48+$a, 185, $green);
	imageline($gd, 34+$a, 184, 47+$a, 184, $green);
	imageline($gd, 35+$a, 199, 45+$a, 199, $black);
	imageline($gd, 35+$a, 198, 45+$a, 198, $black);
	imageline($gd, 36+$a, 197, 44+$a, 197, $black);
	imageline($gd, 37+$a, 196, 43+$a, 196, $black);
};
// Gun (Bottom Left two)
for ($i=0;$i<2;$i++) {
	$a = $i * 16;
	imagesetpixel($gd, 30+$a, 232, $green);
	imageline($gd, 29+$a, 233, 31+$a, 233, $green);
	imageline($gd, 29+$a, 234, 31+$a, 234, $green);
	imageline($gd, 25+$a, 235, 35+$a, 235, $green);
	imageline($gd, 24+$a, 236, 36+$a, 236, $green);
	imageline($gd, 24+$a, 237, 36+$a, 237, $green);
	imageline($gd, 24+$a, 238, 36+$a, 238, $green);
	imageline($gd, 24+$a, 239, 36+$a, 239, $green);
};

// TEXT
imagettftext($gd, 6, 0, 6, 8, $white, $font, 'SCORE<1> HI-SCORE SCORE<2>');
imagettftext($gd, 6, 0, 22, 24, $white, $font, '0070    0880');
imagettftext($gd, 6, 0, 134, 240, $white, $font, 'CREDIT 00');
imagettftext($gd, 6, 0, 6, 240, $white, $font, '3');

// Making the image a PNG
header('Content-Type: image/png');
imagepng($gd);