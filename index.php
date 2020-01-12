<?php

include_once('includes/api.php');

$key = 'hYWVeNPKWjk2QyViID27w';
$api = new API($key);

$result = $api->searchBooks('lord of the');

echo 'Tittel: ' . $api->getTitle() . '<br>';
echo 'Forfatter: ' . $api->getAuthor();