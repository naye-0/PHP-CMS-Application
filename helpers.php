<?php

// Helper functions for URL and Path management
function base_url($path = ""){
    $protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' ? 'https://' : 'http://';
    $host = $_SERVER['HTTP_HOST'];
    $baseUrl = $protocol . $host;
    return $baseUrl . '/' . ltrim($path, '/');
}

// Get the base path of the application
function base_path($path = ""){
    $rootPath = dirname(__DIR__);
    return $rootPath . DIRECTORY_SEPARATOR . ltrim($path, DIRECTORY_SEPARATOR);
}

// Get the uploads directory path or URL
function uploads_path($filename = ""){
    return base_path('uploads' . DIRECTORY_SEPARATOR . $filename);
}

// Get the uploads directory URL
function uploads_url($filename = ""){
    return base_url('uploads/' . ltrim($filename, '/'));
}

// Get the assets directory URL
function asset_url($path = ""){
    return base_url('assets/') . ltrim($path, '/');
}

// Redirect to a given URL
function redirect($url){
    header('Location: ' . base_url($url));
    exit;
}