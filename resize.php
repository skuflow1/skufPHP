<?php
// Repository: php-image-resizer
// New Feature: Support multiple image formats

$imagePath = "input.png";
$outputPath = "output.png";
$maxWidth = 300;

if (exif_imagetype($imagePath) === IMAGETYPE_PNG) {
    $image = imagecreatefrompng($imagePath);
} elseif (exif_imagetype($imagePath) === IMAGETYPE_JPEG) {
    $image = imagecreatefromjpeg($imagePath);
} else {
    die("Unsupported image format.");
}

// Resize logic remains the same
?>
