<?php
include_once('includes/classes/api.php');

// Your Goodreads API key (You can get one here: https://www.goodreads.com/api/keys)
$key = 'hYWVeNPKWjk2QyViID27w';
$api = new API($key);

$HTML = <<<EndOfHtml
<p class="bold">Navn på bok</p>
<form method="post" action="">
<input type="text" name="searchstring" id="searchstring">
<input type="submit" name="submit" value="Søk">
</form>
EndOfHtml;

if (isset($_POST['submit'])) {
    $string = $_POST['searchstring'];
    $result = $api->searchBooks($string);

    $title = $api->getTitle();
    $author = $api->getAuthor();

    $HTML .= <<<EndOfHtml
<p>Resultat:</p>
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
}

include 'header.php';
echo $HTML;
if (isset($result)) {
    print_r($result);
}
include 'footer.php';