<?php
// Set the content type to PNG
header('Content-Type: image/png');

// Create a new image
$image = imagecreatetruecolor(192, 192);

// Define colors
$blue = imagecolorallocate($image, 30, 58, 138); // #1e3a8a
$white = imagecolorallocate($image, 255, 255, 255);

// Fill the background with blue
imagefilledrectangle($image, 0, 0, 192, 192, $blue);

// Add rounded corners (simplified)
$radius = 20;
for ($x = 0; $x < $radius; $x++) {
    for ($y = 0; $y < $radius; $y++) {
        if (($x - $radius) * ($x - $radius) + ($y - $radius) * ($y - $radius) > $radius * $radius) {
            imagesetpixel($image, $x, $y, $blue);
            imagesetpixel($image, 191 - $x, $y, $blue);
            imagesetpixel($image, $x, 191 - $y, $blue);
            imagesetpixel($image, 191 - $x, 191 - $y, $blue);
        }
    }
}

// Add text
$font = 5; // Built-in font
$text = "RG";
$text2 = "Plumbing";

// Calculate text position
$textWidth = imagefontwidth($font) * strlen($text);
$textX = (192 - $textWidth) / 2;
$textY = 80;

// Add the text
imagestring($image, $font, $textX, $textY, $text, $white);

// Add the second text
$textWidth2 = imagefontwidth($font) * strlen($text2);
$textX2 = (192 - $textWidth2) / 2;
$textY2 = 120;
imagestring($image, $font, $textX2, $textY2, $text2, $white);

// Output the image
imagepng($image);

// Free up memory
imagedestroy($image);
?> 