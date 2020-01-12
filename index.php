<?php

include_once('includes/api.php');

$api = new API('hYWVeNPKWjk2QyViID27w');

$result = $api->searchBooks('lord of the');

echo 'Tittel: ' . $result['search']['results']['work']['0']['best_book']['title'] . '<br>';
echo 'Forfatter: ' . $result['search']['results']['work']['0']['best_book']['author']['name'];