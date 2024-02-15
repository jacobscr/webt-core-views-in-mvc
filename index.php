<?php
// Define the placeholder
$placeholder = '###hotel_cards###';

$hotels = ['Hotel Bellagio', 'Hotel Venetian', 'Hotel Caesar Palace', 'Hotel Wynn', 'Hotel Paris'];

// Initialize the result variable
$result = '';

// Iterate through each hotel and generate HTML for each
foreach ($hotels as $hotel) {
    // HTML code for a single hotel card
    $hotel_card = "
        <div class='col-md-4 mt-3'>
            <div class='card w-3'>
                <div class='card-body'>
                    <h5 class='card-title'>$hotel</h5>
                    <p class='card-text'>Some description about $hotel here...</p>
                </div>
            </div>
        </div>
    ";
    // Append the hotel card HTML to the result
    $result .= $hotel_card;
}

// Read the content of the HTML template
$html_template = file_get_contents('./templates/index.html');

// Replace the placeholder with the hotel cards HTML
$html_result = str_replace($placeholder, $result, $html_template);

// Echo the final result
echo $html_result;