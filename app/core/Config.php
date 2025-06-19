<?php


/**
 * Undefined constant
 */
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'lomba');


function adminUrl($path = '')
{
    $host = "http://localhost/Lomba-Oscar1.O-2024";
    $baseUrl = rtrim($host, '/') . '/' . ltrim($path, '/');
    return $baseUrl;
}

function baseImageUrl($path = '')
{
    // Make sure this matches your actual directory structure
    $host = adminUrl('storage/images/');
    return rtrim($host, '/') . '/' . ltrim($path, '/');
}

function imageUrl($path = '')
{
    // Make sure this matches your actual directory structure
    $host = 'storage/images/';
    return rtrim($host, '/') . '/' . ltrim($path, '/');
}



function baseUrl($url = NULL)
{
    $base_url = 'http://localhost/Lomba-Oscar1.O-2024/public';
    if ($url != null) {
        return rtrim($base_url, '/') . '/' . ltrim($url, '/');
    } else {
        return $base_url;
    }
}

function views($url = NULL)
{
    $base_url = 'http://localhost/Lomba-Oscar1.O-2024/app/views/';
    if ($url != null) {
        return rtrim($base_url, '/') . '/' . ltrim($url, '/') . ".php";
    } else {
        return $base_url;
    }
}
