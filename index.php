<?php
// Open the HTML file
$file = fopen('./templates/index.html', 'r');
// Read the content of the file
$html = fread($file, filesize('./templates/index.html'));
// Close the file
fclose($file);

// Define the placeholders and their corresponding replacements
$placeholders = ['###hotel1###', '###hotel2###', '###hotel3###'];
$replacements = ['Hotel Bellagio', 'Hotel Venetian', 'Hotel Caesar Palace'];

// Replace the placeholders with their corresponding values
$result = str_replace($placeholders, $replacements, $html);

// Echo the final result
echo $result;