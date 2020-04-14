<?php

$text = $_GET[text];
$font = 'Mojangles.ttf';


header("Content-Type: image/png");
// $im = @imagecreatefromjpeg('image.jpg')
$im = @imagecreate(110, 20)
    or die("Cannot Initialize new GD image stream");

    $background_color = imagecolorallocate($im, 0, 0, 0);
//background color

$text_color = imagecolorallocate($im, $random2, $random0, $random1);
//random text color

$red = imagecolorallocate($im, 255, 0, 0);
imagecolortransparent($im, $background_color);
imagestring($im, 2,4,110,$font, $text);
//imagestring($im, position, "TEXT THAT YOU WANT");
imagepng($im);
imagedestroy($im);


?>
