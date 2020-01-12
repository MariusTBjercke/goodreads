<?php

include_once('includes/api.php');

$key = 'hYWVeNPKWjk2QyViID27w';
$api = new API($key);

$result = $api->searchBooks('lord of the');

echo 'Tittel: ' . $result['search']['results']['work']['0']['best_book']['title'] . '<br>';
echo 'Forfatter: ' . $result['search']['results']['work']['0']['best_book']['author']['name'];