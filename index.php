<?php
require 'vendor/autoload.php';

use Twig\Environment;
use Twig\Loader\FilesystemLoader;
use Jacob\WebtCoreViewsInMvc\Hotel;

$faker = Faker\Factory::create();

$hotels = [];

for ($i = 0; $i < 10; $i++) {
    $hotels[] = new Hotel($faker->company, $faker->text);
}

// Twig setup
$loader = new FilesystemLoader('./views');
$twig = new Environment($loader);

// Render the index template with the hotel cards
echo $twig->render('hotels.twig', ['hotels' => $hotels]);
