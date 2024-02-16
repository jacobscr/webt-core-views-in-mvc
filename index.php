<?php
require 'vendor/autoload.php';

use Twig\Environment;
use Twig\Loader\FilesystemLoader;

$hotels = ['Hotel Bellagio', 'Hotel Venetian', 'Hotel Caesar Palace', 'Hotel Wynn', 'Hotel Paris'];

// Twig setup
$loader = new FilesystemLoader('./views');
$twig = new Environment($loader);

// Render the index template with the hotel cards
echo $twig->render('index.html', ['hotels' => $hotels]);
