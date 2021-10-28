<?php

//config
define('BASE_URL', 'http://localhost/php_project/');



function redirect($url)
{
    header('Location: ' . trim(BASE_URL, '/ ') . '/' . trim($url, '/ '));
    exit;
}

function asset($file)
{
    return trim(BASE_URL, '/ ') . '/' . trim($file, '/ ');
}

function url($url)
{
    return trim(BASE_URL, '/ ') . '/' . trim($url, '/ ');
}

// dump die
function dd($var)
{
    echo '<pre>';
    var_dump($var);
    exit;
}
