<?php

require_once __DIR__ . "/autoload.php";

$CategoryWinners = $votes->getCategoryWinners();

$response = [
    'winners' => $CategoryWinners
];

echo json_encode($response);