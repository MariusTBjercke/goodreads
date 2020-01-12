<?php
include_once('includes/classes/api.php');

// Your Goodreads API key (You can get one here: https://www.goodreads.com/api/keys)
$key = 'hYWVeNPKWjk2QyViID27w';
$api = new API($key);

$HTML = <<<EndOfHtml
<p class="bold">Search for a book</p>
<form method="post" action="">
<input type="text" name="searchstring" id="searchstring">
<input type="submit" name="submit" value="Search">
</form>
EndOfHtml;

if (isset($_POST['submit'])) {
    $string = $_POST['searchstring'];
    $result = $api->searchBooks($string);

    $title = $api->getTitle(0);
    $author = $api->getAuthor(0);
    $imgURL = $api->getImgUrl(0);

    $HTML .= <<<EndOfHtml
<p>Result:</p>
<table>
<tr>
<td class="bold">Title</td>
<td>$title</td>
</tr>
<tr>
<td class="bold">Author</td>
<td>$author</td>
</tr>
<tr>
<td><img src="$imgURL" alt="$title"></td>
</tr>
</table>
EndOfHtml;
}

include 'header.php';
echo $HTML;
// Debug response
if (isset($result)) {
    print_r($result);
}
include 'footer.php';