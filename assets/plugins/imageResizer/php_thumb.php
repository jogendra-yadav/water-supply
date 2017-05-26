<?php
require_once 'ThumbLib.inc.php';
$image = @$_GET['image'];
$width = @$_GET['width'];
$height = @$_GET['height'];
$image = urldecode($image);
// echo '../../img/'.$image;

$thumb = PhpThumbFactory::create('../../img/'.$image);
$thumb->adaptiveResize($width, $height);
//$thumb->save('assets/photos/'.$id.'.jpg', 'jpg');
$thumb->show();  
