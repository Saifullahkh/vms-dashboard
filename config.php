<?php
// Auto detect base URL (localhost + cPanel compatible)

$protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? "https://" : "http://";
$host = $_SERVER['HTTP_HOST'];

// Script ke folder tak ka path
$scriptDir = str_replace(basename($_SERVER['SCRIPT_NAME']), '', $_SERVER['SCRIPT_NAME']);

// Root path clean karo (ending slash remove)
$basePath = rtrim($scriptDir, '/');

define('BASE_URL', $protocol . $host . $basePath);
