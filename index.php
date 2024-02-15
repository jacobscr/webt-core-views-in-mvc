<?php
// Define the placeholder
$placeholder = '###hotel_cards###';

$hotels = ['Hotel Bellagio', 'Hotel Venetian', 'Hotel Caesar Palace', 'Hotel Wynn', 'Hotel Paris'];

// Initialize the result variable
$result = '';

$hotelfile = fopen('./templates/hotel.html', 'r');
$hotel_template = fread($hotelfile, filesize('./templates/index.html'));
fclose($hotelfile);
foreach ($hotels as $hotel) {
    $result .= str_replace('###hotel_name###', $hotel, $hotel_template);
}

// Open the HTML file
$indexfile = fopen('./templates/index.html', 'r');
// Read the content of the file
$html_template = fread($indexfile, filesize('./templates/index.html'));
// Close the file
fclose($indexfile);

// Replace the placeholder with the hotel cards HTML
$html_result = str_replace($placeholder, $result, $html_template);

// Echo the final result
echo $html_result;