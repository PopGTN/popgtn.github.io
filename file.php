<?php
$text = $_GET[text];
			$random0 = rand(1, 255);
			$random1 = rand(1, 255);
			$random2 = rand(1, 255);
header("Content-Type: image/png");
$im = @imagecreatefromjpeg('image.jpg')
    or die("Cannot Initialize new GD image stream");
$background_color = imagecolorallocate($im, 0, 0, 0);
$text_color = imagecolorallocate($im, $random2, $random0, $random1);
$black = imagecolorallocate($im, 0, 0, 0);
$red = imagecolorallocate($im, 255, 0, 0);
imagecolortransparent($im, $background_color);
imagestring($im, 6, 4, 10, $text, $text_color);
imagepng($im);
imagedestroy($im);
} else {
header("Content-Type: image/png");
$im = @imagecreatefromjpeg('image.jpg')
    or die("Cannot Initialize new GD image stream");
$background_color = imagecolorallocate($im, 255, 255, 255);
imagecolortransparent($im, $background_color);
$black = imagecolorallocate($im, 0, 0, 0);
$red = imagecolorallocate($im, 255, 0, 0);
$text_color = imagecolorallocate($im, 255, 0, 0);
imagestring($im, 5, 10, 2,  "NOTHING ADDED", $text_color);
imagepng($im);
imagedestroy($im);
}
