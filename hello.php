<p>
header("Content-Type: image/png");
$im = @imagecreatefromjpeg('image.jpg')
    or die("Cannot Initialize new GD image stream");
$background_color = imagecolorallocate($im, 0, 0, 0);
$text_color = imagecolorallocate($im, $random2, $random0, $random1);
$black = imagecolorallocate($im, 0, 0, 0);
$red = imagecolorallocate($im, 255, 0, 0);
imagecolortransparent($im, $background_color);
imagestring($im, 2,4,110, "TEXT THAT YOU WANT");
//imagestring($im, position, "TEXT THAT YOU WANT");
imagepng($im);
imagedestroy($im);
