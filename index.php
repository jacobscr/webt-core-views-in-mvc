<?php
require 'vendor/autoload.php';

$view = new \TYPO3Fluid\Fluid\View\TemplateView();

$paths = $view->getTemplatePaths();
$paths->setTemplateRootPaths(['views']);
$paths->setPartialRootPaths(['views']);

$output = $view->render('index');
echo $output;