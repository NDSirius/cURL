<?php
function cURL()
{
    $url = curl_init();
    curl_setopt($url, CURLOPT_URL,
        "https://www.google.com/webhp?hl=ru&sa=X&ved=0ahUKEwj_kcC7i87jAhWjmIsKHa7XBD4QPAgH");
    curl_setopt($url, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($url, CURLOPT_CONNECTTIMEOUT, 20);
    $getString = curl_exec($url);
    curl_close($url);
    return $getString;
}

$markUp = 'markup.html';
$content = file_get_contents($markUp);
$current = cURL();
file_put_contents($markUp, $content);