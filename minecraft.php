<?php
header("Content-Type: image/png");
$im = @imagecreatefromjpeg('welc1.jpg')
    or die("Cannot Initialize new GD image stream");
$background_color = imagecolorallocate($im, 0, 0, 0);
$text_color = imagecolorallocate($im, $random2, $random0, $random1);
$black = imagecolorallocate($im, 0, 0, 0);
$red = imagecolorallocate($im, 255, 0, 0);
imagecolortransparent($im, $background_color);
$font = 'verdana.ttf';
imagestring($im, 6, 4, 10, "Name:", $text_color);
imagestring($im, 6, 50, 10, " $motd", $text_color);
imagestring($im, 6, 4, 30, "Software: $software", $text_color);
imagestring($im, 6, 4, 50, "Version: $version", $text_color);
imagestring($im, 6, 4, 50, "                 Map: $map", $text_color);
imagestring($im, 6, 4, 70, "ServerCount: $onlineget/$onlinemax", $text_color);
imagestring($im, 6, 170, 70, "  Class IP: $classip", $text_color);
imagestring($im, 6, 4, 90, "Plugins: $plcount", $text_color);
imagestring($im, 6, 170, 90, "  Class Port: $classport", $text_color);
imagestring($im, 2, 4, 110, "Created by BlackDeadSkulll NEW UPDATE COMING SOON :)!", $black);
imagepng($im);
imagedestroy($im);
?>
