<?php

$a = array(
    "message" => "Hello world!",
);

header("content-type: application/json");
echo json_encode($a);
