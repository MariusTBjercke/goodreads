# Goodreads API
A simple app for receiving data from Goodreads.

# Find books by title, author, or ISBN
You can search by using the searchBooks method.

**Example:**

$result = $api->searchBooks('The lord of the');

# Get title and author

You can receive the title and author name by simply echoing getTitle() and getAuthor() *after* using searchBooks().

**Example:**

$title = $api->getTitle();

$author = $api->getAuthor();