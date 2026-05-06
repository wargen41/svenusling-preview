<?php
require __DIR__ . '/../config.php';
require __DIR__ . '/../api-requests.php';

$id = $_GET['id'];
$sanitized = sanitizeQuery($id);
if($sanitized === $id){
    $location = API_BASE_URL.'/movie.php?id='.$id;
}else{
    $location = API_BASE_URL.'/search-movies.php?query='.rawurlencode($id);
}

header("Location: {$location}");
