<?php

require_once __DIR__ . "/autoload.php";

$page = isset($_POST['page']) ? (int)$_POST['page'] : 1;
$limit = isset($_POST['limit']) ? (int)$_POST['limit'] : 10;
$offset = ($page - 1) * $limit;

$totalVotes = $votes->countVotes();
$totalPages = ceil($totalVotes / $limit);
$allVotes = $votes->getPaginatedVotes($limit, $offset);

$response = [
    'votes' => $allVotes,
    'totalPages' => $totalPages,
    'currentPage' => $page
];

echo json_encode($response);