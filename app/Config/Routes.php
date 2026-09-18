<?php

use CodeIgniter\Router\RouteCollection;

/** @var RouteCollection $routes */
$routes->get('/', 'Home::index');
$routes->get('about', 'Home::about');
$routes->get('contact', 'Home::contact');
$routes->get('privacy-policy', 'Home::privacyPolicy');
$routes->get('terms', 'Home::terms');
$routes->get('disclaimer', 'Home::disclaimer');
$routes->get('calculators', 'Home::calculators');
$routes->get('calculators/health', 'Home::healthCalculators');
$routes->get('calculators/health/bmi', 'Home::bmiCalculator');
$routes->get('sitemap', 'Home::sitemapPage');
$routes->get('sitemap.xml', 'Home::sitemapXml');
$routes->get('robots.txt', 'Home::robotsTxt');