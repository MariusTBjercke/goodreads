<?php
include_once('includes/api.php');

$key = 'hYWVeNPKWjk2QyViID27w';
$api = new API($key);

$result = $api->searchBooks('eragon');

$title = $api->getTitle();
$author = $api->getAuthor();

$HTML = <<<EndOfHtml
<table>
<tr>
<td class="bold">Tittel</td>
<td>$title</td>
</tr>
<tr>
<td class="bold">Forfatter</td>
<td>$author</td>
</tr>
</table>
EndOfHtml;

include 'header.php';
echo $HTML;
include 'footer.php';