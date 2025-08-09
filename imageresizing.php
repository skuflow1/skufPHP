<?php
// Repository: php-image-resizer
// Description: A script to resize images using GD library.

$imagePath = "input.jpg";
$outputPath = "output.jpg";
$maxWidth = 300;

if (!file_exists($imagePath)) {
    die("Input image not found.");
}

list($width, $height) = getimagesize($imagePath);
$ratio = $height / $width;
$newWidth = $maxWidth;
$newHeight = $newWidth * $ratio;

$image = imagecreatefromjpeg($imagePath);
$newImage = imagecreatetruecolor($newWidth, $newHeight);
imagecopyresampled($newImage, $image, 0, 0, 0, 0, $newWidth, $newHeight, $width, $height);

imagejpeg($newImage, $outputPath);
imagedestroy($image);
imagedestroy($newImage);

echo "Resized image saved to $outputPath.";
?>
