<?php
require 'vendor/autoload.php';

use Jacob\WebtCoreViewsInMvc\Hotel;

$hotels = [];
$faker = Faker\Factory::create();
$view = new \TYPO3Fluid\Fluid\View\TemplateView();

for ($i = 0; $i < 10; $i++) {
    $hotels[] = new Hotel($faker->company, $faker->text);
}

$paths = $view->getTemplatePaths();
$paths->setTemplateRootPaths(['views']);
$paths->setPartialRootPaths(['views']);

$view->assign('hotels', $hotels);

$output = $view->render('index');
echo $output;