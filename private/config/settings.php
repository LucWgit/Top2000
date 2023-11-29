<?php
/**
 * Database Settings
 */
$database = [
    'host' => 'portfolio.ictcampus.nl',
    'user' => 'dbuser_top2000_2',
    'password' => 'wz4Vqb&5Y@',
    'database' => 'top2000_2',
];

/**
 * Site Settings
 */
$site = [
    'siteName' => 'Top 2000',
    'debug' => true,
    'maintenance' => false,
    'showPopup' => true,
    'popupTitle' => 'Note',
    'popupMessage' => 'This is a popup you can change it in the settings!',
    'popupButtons' => [
        [
            'label' => 'Change button',
            'action' => ''
        ],
        // Add more buttons as needed
    ]

];

/**
 * Allowed IPs That can bypass the maintenance
 */
$allowedIPs = ['::0'];

/**
 * Page Title Settings
 */
$url = $_SERVER['REQUEST_URI'];
$url = explode('?', $url)[0];


// If the URL is the root path, set it to '/home'
if ($url == '/') {
    $url = '/home';
}

$titles = [
    'default' => substr($url, 1) . ' - ' . $site['siteName'],
    'maintenance' => 'Under Maintenance - ' . $site['siteName'],
    'home' => 'Home Page - ' . $site['siteName'],
    'about' => 'About Us - ' . $site['siteName'],
    'contact' => 'Contact Us - ' . $site['siteName'],
    '404' => '404 - Oops page not found!',
];

// Disable errors if debug is set to false
if (!$site['debug']) {
    error_reporting(0);

}