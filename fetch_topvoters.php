<?php

require_once __DIR__ . "/autoload.php";

$topVoters = $votes->getTopVoters();

$response = [
    'voters' => $topVoters
];

echo json_encode($response);
