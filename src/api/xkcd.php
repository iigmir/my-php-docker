<?php

function fetch_data($id = "") {
    $ch = curl_init();

    // https://www.php.net/manual/en/function.curl-setopt.php
    curl_setopt($ch, CURLOPT_URL, "https://xkcd.com/info.0.json");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    $response = curl_exec($ch);
    if(curl_error($ch)) {
        curl_close($ch);
        return curl_error($ch);
    }
    curl_close($ch);
    return json_decode($response);
}

$a = array(
    "message" => fetch_data(),
);

header("content-type: application/json");
echo json_encode($a);
