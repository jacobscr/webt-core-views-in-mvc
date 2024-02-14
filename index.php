<?php
// Open the HTML file
$file = fopen('./templates/index.html', 'r');
// Read the content of the file
$html = fread($file, filesize('./templates/index.html'));
// Close the file
fclose($file);

// Define the placeholders and their corresponding replacements
/*$placeholders = ['###hotel1###', '###hotel2###', '###hotel3###'];
$replacements = ['Hotel Bellagio', 'Hotel Venetian', 'Hotel Caesar Palace'];*/

$hotels = ['Hotel Bellagio', 'Hotel Venetian', 'Hotel Caesar Palace', 'Hotel Wynn', 'Hotel Paris'];

// Replace the placeholders with their corresponding values
//$result = str_replace($placeholders, $replacements, $html);
foreach ($hotels as $hotel) {
    $result = str_replace('###hotel###', $hotel, $html);
}

// Echo the final result
echo $result;